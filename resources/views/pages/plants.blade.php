@extends('layouts.mainLayout')
@section('main')
    @foreach($plants as $plant)
        <h1>{{$plant->name}}</h1>
    @endforeach
@endsection