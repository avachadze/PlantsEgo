@extends('layouts.mainLayout')
@section('main')
<div>
    @if(Auth::User->companyID==null)
    <form action="/systems/add/personal" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
      <input type="hidden" name="userID"value="{{Auth::User->id}}">
        <button type="submit">Register system</button>
    </form>
    @else
    <form action="/systems/add/corporative" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <input type="hidden" name="companyID"value="{{Auth::User->companyID}}">
        <button type="submit">Register system</button>
    </form>
    @else
    @endif
</div>
@endsection