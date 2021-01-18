@extends('layouts.mainLayout')
@section('main')
<h1>{{$plant->name}}</h1>
<h2>{{$plant->type}}</h2>
<p>{{$plant->description}}</p>
@endsection