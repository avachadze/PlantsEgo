@extends('layouts.mainLayout')
@section('main')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="/js/receiver.js"></script>


<h1>{{$plant->name}}</h1>
<h2>{{$plant->type}}</h2>
<p>{{$plant->description}}</p>
<div id="linechart_material" style="width: 900px; height: 500px"></div>
@endsection