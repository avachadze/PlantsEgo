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

    <div class="container-fluid m-0 p-0 row" id="container">
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

            <form action="{{ route('destroyMessage', $message->id) }}"  method="POST">
                <input type="submit" class="btn-lightWarning btn-outline-lightWarningBorder text-light btn" value="Delete this Message">
                @method('DELETE')
                @csrf
            </form>
        </aside>
    </div>

@endsection
