@extends('layouts.mainLayout')
@section('resources')
<link rel="stylesheet" href="{{ asset('css/plants.css') }}">
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
    @endif
</div>

      
      
    </div>
  </div>
</div>

    @foreach($plantsToShow as $plant)
  <div class="box-shadow border-radious">
    <h1><a href="{{$plant->system_id.'/'.$plant->id}}">{{$plant->name}}</a></h1>
  </div>
        
    @endforeach
@endsection