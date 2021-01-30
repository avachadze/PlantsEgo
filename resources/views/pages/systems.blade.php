@extends('layouts.mainLayout')
@section('resources')
<link rel="stylesheet" href="{{ asset('css/system.css') }}">
  <script>
    let doc = $(document);
    doc.ready(localize);
    function getLocation(position){
      let latitudeInput = $('#latitude');
      let longitudeInput = $('#longitude');
      latitudeInput.val(position.coords.latitude);
      longitudeInput.val(position.coords.longitude);
    }
    function localize(){
      if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(getLocation);
  } else {
    alert("Geolocation is not supported by this browser.");
  }
    }
    
  </script>
@endsection
@section('main')

<button class="add" data-toggle="modal" data-target="#exampleModal">
<img src="{{asset('img/plus.png')}}" class="plus"alt="">
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{__('messages.addSystem')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      @if(Auth::User()->companyID==null)
    <form action="/systems/add/personal" method="post">
    @csrf
        <label for="name">{{__('messages.name')}}</label>
        <input type="text" name="name" class="form-control" id="name" required>
        <label for="type">{{__('messages.type')}}</label>
        <input type="text" name="type" class="form-control" id="type" required>
        <input type="hidden" name="latitude" id="latitude">
        <input type="hidden" name="longitude" id="longitude">
        <label for="description">{{__('messages.description')}}</label>
        <br>
        <textarea name="description" id="description" class="form-control" cols="30" rows="10" required></textarea>
      <input type="hidden" name="userID" id="userID" value="{{Auth::User()->id}}">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('messages.close')}}</button>
        <button type="submit" class="btn btn-primary">{{__('messages.save')}}</button>
      </div>
    </form>
    @else
    <form action="/systems/add/corporative" method="post">
    @csrf
        <label for="name">{{__('messages.name')}}</label>
        <input type="text" class="col-xl-4 form-control" name="name" id="name" required>
        <input type="hidden" id="companyID" name="companyID"value="{{Auth::User()->companyID}}">
        <label for="type">{{__('messages.type')}}</label>
        <input type="text" name="type" class="form-control" id="type" required>
        <input type="hidden" name="latitude">
        <input type="hidden" name="longitude">
        <label for="description">{{__('messages.description')}}</label>
        <br>
        <textarea name="description" id="description" class="form-control" cols="30" rows="10" required></textarea>
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

   
@if(count($systems)==0)
 <h1>{{__('messages.noSystems')}}</h1>
@else

<div class="container">
<h1>{{__('messages.yourSystems')}}</h1>
<div class="row">
@foreach($systems as $system)

<div class="select box-shadow col-3 border-radious mb-3 mt-3 mr-3">
<a class="text-decoration-none" href="/systems/{{$system->id}}">
<h1>{{$system->name}}</h1>
<p>{{__('messages.type')}} {{$system->type}}</p>
<p>{{__('messages.description')}}  {{$system->description}}</p>
<div class="container-fluid">
<div class="row">
<form action="/systems/{{$system->id}}/delete" method="post">
@csrf 
@method('DELETE')
<input type="hidden" name="id" value="{{$system->id}}">
<button type="submit" class="btn btn-danger mb-2 mr-2">{{__('messages.delete')}}</button>
</a>
</form>

 <button class="btn btn-warning mb-2" data-toggle="modal" data-target="#Modal1">{{__('messages.edit')}}</button>

</div>
</div>

</div>
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-body">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit system</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
        <form action="/systems/update" method="post">
        @csrf
        @method('PUT')
          <input type="hidden" value="{{$system->id}}" name="id">
          <label for="name">{{__('messages.name')}}</label>
          <input type="text" name="name" id="name" class="form-control" value="{{$system->name}}" required>
          <label for="type">{{__('messages.type')}}</label>
          <input type="text" name="type" class="form-control" id="type" value="{{$system->type}}" required>
          <label for="description">{{__('messages.description')}}</label>
          <br>
          <textarea name="description" id="description" cols="30" rows="10" class="form-control" value="" required>{{$system->description}}</textarea>
      
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
@endif
@endsection