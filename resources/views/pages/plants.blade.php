@extends('layouts.mainLayout')
@section('resources')
<link rel="stylesheet" href="{{ asset('css/system.css') }}">
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false">
</script>
 <script>
let doc = $(document);
doc.ready(mapa);
function mapa(){
$.ajax({
    // la URL para la petición
    url: window.location + '/location',

    // la información a enviar
    // (también es posible utilizar una cadena de datos)
    //data: {
      //  id: 123
    //},

    // especifica si será una petición POST o GET
    type: 'GET',

    // el tipo de información que se espera de respuesta
    dataType: 'json',

    // código a ejecutar si la petición es satisfactoria;
    // la respuesta es pasada como argumento a la función
    success: function (json) {
        let latitude = json[0];
        let longitude = json[1];
        showGoogleMaps(latitude, longitude);
        
        
        
    },

    // código a ejecutar si la petición falla;
    // son pasados como argumentos a la función
    // el objeto de la petición en crudo y código de estatus de la petición
    error: function (xhr, status) {
        alert('Disculpe, existió un problema al cargar los sensores');
    },

    // código a ejecutar sin importar si la petición falló o no
    complete: function (xhr, status) {


    }

});
}
function showGoogleMaps(latitude,longitude)
{
    //Creamos el punto a partir de la latitud y longitud de una dirección:
    var point = new google.maps.LatLng(latitude, longitude);
 
    //Configuramos las opciones indicando zoom, punto y tipo de mapa
    var myOptions = {
        zoom: 15, 
        center: point, 
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
 
    //Creamos el mapa y lo asociamos a nuestro contenedor
    var map = new google.maps.Map(document.getElementById("showMap"),  myOptions);
 
    //Mostramos el marcador en el punto que hemos creado
    var marker = new google.maps.Marker({
        position:point,
        map: map,
        title: ""
    });
}
showGoogleMaps();
 </script>
<script>

</script>

@endsection
@section('main')
<div id="showMap" style="width: 100%; height: 30vh;"> </div>

    <button class="add" data-toggle="modal" data-target="#exampleModal">
        <img src="{{ asset('img/plus.png') }}" class="plus"alt="">
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{__('messages.addPlant')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      @if(Auth::User()->companyID==null)
      <form action="/plants/add" method="post">
        @csrf
        <input name="systemID" type="hidden" value="{{$id}}">
            <label for="name">{{__('messages.name')}}</label>
            <br>
            <input type="text" class="form-control" name="name" required>
            <br>
            <label for="type">{{__('messages.type')}}</label>
            <br>
            <input type="text" class="form-control" name="type" required>
            <br>
            <label for="description">{{__('messages.description')}}</label>
            <br>
            <textarea name="description" id="description" class="form-control" cols="30" rows="10" required></textarea>
            <br>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('messages.close')}}</button>
        <button type="submit" class="btn btn-primary">{{__('messages.save')}}</button>
      </div>
    </form>
    @endif
      </div> 
    </div>
  </div>
</div>
<div class="container mt-3">
  <h1>{{__('messages.yourPlants')}}</h1>
<div class="row">
    @foreach($plantsToShow as $plant)
    
  <div class="select box-shadow col-xl-3 col-sm-12 border-radious mb-3 mt-3 mr-3">
  <a class="text-decoration-none" href="{{$plant->system_id.'/'.$plant->id}}">
    <h1>{{$plant->name}}</h1>
    <p>{{__('messages.type')}}{{$plant->type}}</p>
    <p>{{__('messages.description')}}{{$plant->description}}</p>
    </a>
    <div class="container-fluid">
<div class="row">
<form action="/systems/plants/{{$plant->id}}/delete" method="post">
@csrf 
@method('DELETE')
<input type="hidden" name="id" value="{{$plant->id}}">
<input type="hidden" name="system_id" value="{{$plant->system_id}}">
<button type="submit" class="btn btn-danger mb-2 mr-2" >{{__('messages.delete')}}</button>

</form>

 <button class="btn btn-warning mb-2"  data-toggle="modal" data-target="#Modal1">{{__('messages.edit')}}</button>

</div>
</div>
  </div>
  <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-body">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{__('messages.editSystem')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
        <form action="/plants/update" method="post">
        @csrf
        @method('PUT')
          <input type="hidden" value="{{$plant->id}}" name="id">
          <input type="hidden" value="{{$plant->system_id}}" name="system_id">
          <label for="name">{{__('messages.name')}}</label>
          <input type="text" name="name" id="name" class="form-control" value="{{$plant->name}}" required>
          <label for="type">{{__('messages.type')}}</label>
          <input type="text" name="type" class="form-control" id="type" value="{{$plant->type}}" required>
          <label for="description">{{__('messages.description')}}</label>
          <br>
          <textarea name="description" id="description" cols="30" rows="10" class="form-control" value="" required>{{$plant->description}}</textarea>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('messages.close')}}</button>
        <button type="submit" class="btn btn-primary">{{__('messages.save')}}</button>
      </div>
      </form>
    </div>
  </div>
</div>
    @endforeach
    </div>
    </div>
@endsection