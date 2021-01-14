@extends('layouts.mainLayout')
@section('main')
<div>
<h1>Añadir sensores</h1>
    <form action="/system/sensors/add" method="post">
    @csrf
        <label for="name">Name</label>
        <br>
        <input type="text" id="name" name="name">
        <br>
        <label for="topic">MQTT Topic</label>
        <br>
        <input type="text" id="topic" name="topic">
        <br>
        <button type="submit">Register sensor</button>
    </form>
</div>
@endsection