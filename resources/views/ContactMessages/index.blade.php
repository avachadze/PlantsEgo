@extends('layouts.mainLayout')
@section('languages')
    <a class="dropdown-item" href="/en">{{__('messages.english')}}</a>
    <a class="dropdown-item" href="/es">{{__('messages.spanish')}}</a>
    <a class="dropdown-item" href="/eu">{{__('messages.basque')}}</a>
@endsection
@section('main')
    <style>

        footer
        {
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        #dash_button
        {
            display: none;
        }
    </style>



@endsection
