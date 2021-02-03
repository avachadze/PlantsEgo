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
<section class="d-flex flex-column justify-content-between align-items-center container-fluid">

    @if(Session::has('sentReply'))
        <div class="row alert alert-lightSuccess border border-success mt-4 animate__animated animate__backInUp">
            <h3>{{ Session::get('sentReply') }}</h3>
        </div>
    @endif

    @foreach($Notifications as $message)

        <article class="border border-lighterGray w-75 rounded mt-4">

            <a href="{{ route('messages.show', $message->id) }}">

                <button class="container-fluid btn p-4" >

                    <div class="row">

                        <div class="col-4">
                            <p class="border-lighterGray border-bottom">
                                Name: <br> {{ $message->fromName }}
                            </p>
                        </div>

                        <div class="col-4">
                            <p class="border-bottom border-lighterGray">
                                Email: <br> {{ $message->fromEmail }}
                            </p>
                        </div>

                        <div class="col-4">
                            <p class="border-bottom border-lighterGray">
                                Subject: <br> {{ $message->subject }}
                            </p>
                        </div>

                    </div>

                    <div class="row mt-2">
                        <p class="pt-1 px-3">
                            {{ $message->message }}
                        </p>
                    </div>

                </button>

            </a>


        </article>

    @endforeach


            <a href="
                @if($replied === true)
                    {{ route('messages.list') }}
                @else
                    {{ route('messages.listReplied') }}
                @endif" class="text-center mt-5">
                <button class="btn btn-info waves-effect container-fluid text-light p-2">
                    @if($replied === true)
                        {{ __('messages.goUnreplied') }}
                    @else
                        {{ __('messages.goReplied') }}
                    @endif
                </button>
            </a>

</section>

@endsection
