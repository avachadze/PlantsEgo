@extends('layouts/mainLayout')
@section('main')
    <div>
        <form action="/plants/add" method="post">
        @csrf
            <select name="systemSelector" id="systemSelector">
            
            </select>
            <br>
            <label for="name">Name</label>
            <br>
            <input type="text" name="name">
            <br>
            <label for="type">Type</label>
            <br>
            <input type="text" name="type">
            <br>
            <label for="">Description</label>
            <br>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
            <br>
            <button type="submit">Register</button>
        </form>
    </div>
@endsection