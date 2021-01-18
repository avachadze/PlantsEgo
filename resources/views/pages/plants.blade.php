@extends('layouts.mainLayout')
@section('main')
    @foreach($plants as $plant)
        <h1><a href="{{$plant->system_id.'/'.$plant->id}}">{{$plant->name}}</a></h1>
    @endforeach
@endsection