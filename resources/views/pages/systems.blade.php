@extends('layouts.mainLayout')
@section('main')
@if(count($systems)==0)
 <h1>You don't have any system registred for the moment</h1>
@else
@foreach($systems as $system)
<h1><a href="/systems/{{$system->id}}">{{$system->name}}</a></h1>
@endforeach
@endif
@endsection