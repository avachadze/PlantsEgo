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
            <form action="{{ route('contactResponseSend', $userID) }}" method="get">
                @csrf
                <div class="form-header blue accent-1">
                    <h3 class="mt-2"><i class="fas fa-envelope"></i> {{__('messages.contactResponse')}}</h3>
                </div>
                <div class="md-form">
                    <i class="fas fa-tag prefix grey-text"></i>
                    <label for="form-Subject">{{__('messages.subject')}}</label>
                    <input type="text" id="form-Subject" name="form-Subject" class="form-control">
                </div>
                <div class="md-form">
                    <i class="fas fa-pencil-alt prefix grey-text"></i>
                    <label for="msg">{{__('messages.sendMessage')}}</label>
                    <textarea id="msg" name="msg" class="form-control md-textarea mb-3" rows="3"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-outline-primary waves-effect">{{__('messages.submit')}}</button>
                </div>
            </form>
            <form action="{{ route('destroyMessage', $message->id) }}" class="d-flex justify-content-center my-2 text-center"  method="POST">
                <input type="submit" id="submitContact" class="waves-effect btn-outline-lightWarningBorder btn pb-4" value="Delete this Message">
                @method('DELETE')
                @csrf
            </form>
        </aside>
    </div>

@endsection
