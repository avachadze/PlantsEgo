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

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <a href="{{ route('Company.index', app()->getLocale()) }}" class="btn btn-outline-info bg-light text-info"><button>Companies</button></a>
            </div>
        </div>
    </div>
</div>
@endsection
