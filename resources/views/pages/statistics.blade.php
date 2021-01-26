@extends('layouts.mainLayout')
@section('main')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="/js/receiver.js"></script>
<link rel="stylesheet" href="/css/plant.css">
   
    <div class="d-flex flex-row justify-content-center bg-softGray">
    <h3 class="col-xl-2">Add sensor:</h3>
    <form action="/system/sensors/add" method="post">
    @csrf
        <input type="hidden" name="plant_id" class="" value="{{$plant->id}}">
        <label for="name" class="">Name:</label>
        <input type="text" id="name" class="col-xl-2" name="name">
        <label for="topic" class="">MQTT Topic:</label>
        <input type="text" id="topic" name="topic" class="col-xl-4">
        <button type="submit" class="btn btn-primary col-3">Register sensor</button>
    </form>
</div>
</div>
   
    <div class="container bg-primary">
<h1 class="col-12">{{$plant->name}}</h1>

<h2 class="col-12">Type: {{$plant->type}}</h2>
<h2 class="col-12">Description:</h2>
<p class="col-12"> {{$plant->description}}</p>

<div id="charts"></div>
</div>
@endsection