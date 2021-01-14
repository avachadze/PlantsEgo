@extends('layouts.mainLayout')
@section('main')
<div>
    <form action="/systems/add" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        @if(Auth::user->corporative==false)
        @else
        @endif
        <button type="submit">Register system</button>
    </form>
</div>
@endsection