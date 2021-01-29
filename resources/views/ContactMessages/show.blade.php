@extends('layouts.mainLayout')

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

    <div class="container-fluid pt-4 row" id="container">
        <section class="col-7 border-lighterGray border rounded mx-4">

            <article class="mt-3">
                <h1>
                    Subject: {{ $message->subject }}
                </h1>
            </article>

            <section class="row border-bottom border-lighterGray">

                <article class="col-4 mt-2">
                    <h3>
                        From: {{ $message->fromName }}
                    </h3>
                </article>

                <article class="col-8 mt-2">
                    <h3>
                        Email: {{ $message->fromEmail }}
                    </h3>
                </article>

            </section>

            <article class="mt-3 pl-2">
                <p>
                    {{ $message->message }}
                </p>
            </article>

        </section>

        <aside class="col-4 border rounded border-lighterGray mx-2">
            <form action="{{ route('contactResponseSend', $message->id) }}" method="get">
                @csrf
                <div class="form-header blue accent-1">
                    <h3 class="mt-2">@if(!$message->replied){{__('messages.contactResponse')}}@else{{ __('messages.contactreplied') }}@endif</h3>
                </div>
                <div class="md-form">
                    <label for="form-Subject">{{__('messages.subject')}}</label>
                    <input type="text" id="form-Subject" name="form-Subject" class="form-control" value="RE: {{ $message->subject }}">
                </div>
                <div class="md-form">
                    <label for="msg">{{__('messages.sendMessage')}}</label>
                    <textarea id="msg" name="msg" class="form-control md-textarea mb-3" rows="3">@if($message->replied){{ $message->ContactReply->msg }}@endif</textarea>
                </div>

                @if(!$message->replied)
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-primary waves-effect">{{__('messages.submit')}}</button>
                    </div>
                @endif
            </form>

            <form action="{{ route('destroyMessage', $message->id) }}" class="d-flex justify-content-center my-2 text-center"  method="POST">
                <input type="submit" id="submitContact" class="waves-effect btn-outline-lightWarningBorder btn pb-4" value="Delete this Message">
                @method('DELETE')
                @csrf
            </form>
        </aside>
    </div>

@endsection
