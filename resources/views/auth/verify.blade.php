@extends('layouts.mainLayout')

@section('main')

<style>
    footer {
        position: absolute;
        bottom: 0px;
        width: 100%;
    }

    #login_register {
        display: none;
    }
</style>







<div class="d-flex  align-items-center" style="min-height: 75vh;">
    <div class="col-12">
        <div class="row">
            <h2 class="col-12 text-center  text-secondary">{{ __('messages.verifyEmail') }}</h2>
        </div>
        <div class="row justify-content-center">
            <h3 class="text-center text-secondary">{{ __('messages.notReceived') }},</h3>
            <form class="d-inline text-center" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('messages.resendEmail') }}</button>.
            </form>
        </div>
    </div>
</div>


@endsection