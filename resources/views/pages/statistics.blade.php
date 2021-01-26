@extends('layouts.mainLayout')
@section('main')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="/js/receiver.js"></script>
<link rel="stylesheet" href="/css/plant.css">
    <div class="navbar nav shadow">
    <form action="/system/sensors/add" method="post">
    @csrf
        <input type="hidden" name="plant_id" value="{{$plant->id}}">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <label for="topic">MQTT Topic</label>
        <input type="text" id="topic" name="topic">
        <button type="submit" class="btn btn-primary">Register sensor</button>
    </form>
</div>
    </div>
<h1>{{$plant->name}}</h1>

<h2>{{$plant->type}}</h2>
<p>{{$plant->description}}</p>

<div id="charts"></div>
@endsection