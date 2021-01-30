@extends('layouts.mainLayout')
@section('resources')
<link rel="stylesheet" href="{{ asset('css/system.css') }}">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="/js/receiver.js"></script>
<script>
  let doc = $(document);
  doc.ready(iniciarEventos);
  function iniciarEventos(){
    let form = $('#form');
    pedirAJAX();
    form.submit(validateTopic);
  }
  function validateTopic(e){
    let string = "/plantsego/";
    let topic = $('#topic').val();
    let same = true;
  
    for(let i=0;i<11;i++){
     
      if(string[i]!=topic[i]){
        same=false;
      }
    }
    if(!same){
      alert("the topic must start with /plantsego/");
      return false;
    }
    else{
      return true;
    }
  }
</script>

@endsection
@section('main')
<button class="add" data-toggle="modal" data-target="#exampleModal">
        <img src="{{ asset('img/plus.png') }}" class="plus"alt="">
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register a sensor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
      <form action="/system/sensors/add" id="form" method="post">
    @csrf
        <input type="hidden" name="plant_id" class="" value="{{$plant->id}}">
        <label for="name" class="">Name:</label>
        <br>
        <input type="text" class="form-control" id="name" class="col-xl-12" name="name" required>
        <br>
        <label for="topic" class="">MQTT Topic:</label>
        <br>
        <input type="text" class="form-control" id="topic" name="topic" class="col-xl-12 mb-2" required>
        <br>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="save" class="btn btn-primary">Save changes</button>
      </div>
    </form>
      </div> 
    </div>
  </div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  
<div class="container border-radious box-shadow mt-3 mb-3">
<h1 class="col-12">{{$plant->name}}</h1>

<h2 class="col-12">Type: {{$plant->type}}</h2>
<h2 class="col-12">Description:</h2>
<p class="col-12"> {{$plant->description}}</p>
<div>
  <form action="/sensors/delete" method="post">
  @csrf
  @method('delete')
  <input type="hidden" value="{{$plant->id}}" name="plantId">
  <input type="hidden" value="{{$plant->system_id}}" name="systemId">
  <label for="id">Delete a sensor:</label>
   <select name="id" id="id">
    @foreach($sensorsToShow as $sensor)
      <option value="{{$sensor->id}}">{{$sensor->name}}</option>
    @endforeach   
   </select>
   <button type="submit" class="btn btn-danger">Delete</button>
  </form>
</div>
<div id="charts"></div>
</div>

@endsection