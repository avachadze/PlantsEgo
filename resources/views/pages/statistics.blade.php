@extends('layouts.mainLayout')
@section('resources')
<link rel="stylesheet" href="{{ asset('css/plants.css') }}">
<link rel="stylesheet" href="/css/plant.css"> 
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
    
      <form action="/system/sensors/add" method="post">
    @csrf
        <input type="hidden" name="plant_id" class="" value="{{$plant->id}}">
        <label for="name" class="">Name:</label>
        <br>
        <input type="text" id="name" class="col-xl-12" name="name">
        <br>
        <label for="topic" class="">MQTT Topic:</label>
        <br>
        <input type="text" id="topic" name="topic" class="col-xl-12 mb-2">
        <br>
        <button type="submit" class="btn btn-primary col-5">Register sensor</button>
    </form>
      </div> 
    </div>
  </div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="/js/receiver.js"></script>
  
<div class="container ">
<h1 class="col-12">{{$plant->name}}</h1>

<h2 class="col-12">Type: {{$plant->type}}</h2>
<h2 class="col-12">Description:</h2>
<p class="col-12"> {{$plant->description}}</p>

<div id="charts"></div>
</div>
@endsection