@extends('layouts.mainLayout')
@section('resources')
<link rel="stylesheet" href="{{ asset('css/system.css') }}">
  <script>
    let doc = $(document);
    doc.ready(localize);
    function getLocation(position){
      let latitudeInput = $('#latitude');
      let longitudeInput = $('#longitude');
      latitudeInput.val(position.coords.latitude);
      longitudeInput.val(position.coords.longitude);
    }
    function localize(){
      if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(getLocation);
  } else {
    alert("Geolocation is not supported by this browser.");
  }
    }
    
  </script>
@endsection
@section('main')

<button class="add" data-toggle="modal" data-target="#exampleModal">
<img src="{{asset('img/plus.png')}}" class="plus"alt="">
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add system</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      @if(Auth::User()->companyID==null)
    <form action="/systems/add/personal" method="post">
    @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" id="name" required>
        <label for="type">Type:</label>
        <input type="text" name="type" class="form-control" id="type" required>
        <input type="hidden" name="latitude" id="latitude">
        <input type="hidden" name="longitude" id="longitude">
        <label for="description">Description:</label>
        <br>
        <textarea name="description" id="description" class="form-control" cols="30" rows="10" required></textarea>
      <input type="hidden" name="userID" id="userID" value="{{Auth::User()->id}}">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    @else
    <form action="/systems/add/corporative" method="post">
    @csrf
        <label for="name">Name</label>
        <input type="text" class="col-xl-4" name="name" id="name">
        <input type="hidden" id="companyID" name="companyID"value="{{Auth::User()->companyID}}">
        <label for="type">Type:</label>
        <input type="text" name="type" id="type">
        <input type="hidden" name="latitude">
        <input type="hidden" name="longitude">
        <label for="description">Description:</label>
        <br>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
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

   
@if(count($systems)==0)
 <h1>You don't have any system registred for the moment</h1>
@else

<div class="container">
<h1>Your systems:</h1>
<div class="row">
@foreach($systems as $system)

<div class="select box-shadow col-3 border-radious mb-3 mt-3 mr-3">
<a class="text-decoration-none" href="/systems/{{$system->id}}">
<h1>{{$system->name}}</h1>
<p>Type: {{$system->type}}</p>
<p>Description:  {{$system->description}}</p>
</a>
</div>

@endforeach
</div>
</div>
@endif
@endsection