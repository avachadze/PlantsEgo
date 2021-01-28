@extends('layouts.mainLayout')
@section('resources')
<link rel="stylesheet" href="{{ asset('css/system.css') }}">
<script src="{{asset('js/validateSystemForms.js')}}"></script>
@endsection
@section('main')

    <button class="add" data-toggle="modal" data-target="#exampleModal">
        <img src="{{ asset('img/plus.png') }}" class="plus"alt="">
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      @if(Auth::User()->companyID==null)
      <form action="/plants/add" method="post">
        @csrf
        <input name="systemID" type="hidden" value="{{$id}}">
            <label for="name">Name</label>
            <br>
            <input type="text" class="form-control" name="name" required>
            <br>
            <label for="type">Type</label>
            <br>
            <input type="text" class="form-control" name="type" required>
            <br>
            <label for="">Description</label>
            <br>
            <textarea name="description" id="description" class="form-control" cols="30" rows="10" required></textarea>
            <br>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    @endif
      </div> 
    </div>
  </div>
</div>
<div class="container">
  <h1>Your plants:</h1>
<div class="row">
    @foreach($plantsToShow as $plant)
    
  <div class="select box-shadow col-3 border-radious mb-3 mt-3 mr-3">
  <a class="text-decoration-none" href="{{$plant->system_id.'/'.$plant->id}}">
    <h1>{{$plant->name}}</h1>
    <p>Type:{{$plant->type}}</p>
    <p>Description:{{$plant->description}}</p>
    </a>
  </div>
 
    @endforeach
    </div>
    </div>
@endsection