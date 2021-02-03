<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="icon" href="{{URL::asset('img/logo.png')}}">
    <link rel="stylesheet" href="{{asset('css/styling.css')}}">
    <link rel="stylesheet" href="{{asset('css/forms.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plants Ego</title>
    <link rel="stylesheet" href="{{asset('/node_modules/animate.css/animate.css')}}">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">

    <script src="{{mix('js/app.js') }}"></script>
    <style>
        footer {
            position: relative;
            bottom: 0px;
            width: 100%;
        }

        .mainSection {
            min-height: 75vh;
        }
    </style>
    @section('resources')
    @show
</head>
@section ('photoHeader')

@show
<header>

    <nav class="navbar navbar-expand-lg navbar-light" id="nav">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="navbar-toggler-icon"></div>
        </button>
        <a class="navbar-brand" href="/"><img src="{{asset('img/logo.png')}}" alt="" id="logo"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="item nav-item active">
                    <a class="nav-link" href="/">{{__('messages.home')}} <span class="sr-only">(current)</span></a>
                </li>
                @section ('compatibility')

                @show
                <li class="item nav-item">
                    <a class="nav-link" href="/contact">{{__('messages.contact')}}</a>
                </li>
                <li class="nav-item dropup" id="drop3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__('messages.language')}}
                    </a>
                    <div id="dropMenu" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a id="hover" class="dropdown-item" href="{{ route('switchLang', 'en') }}"> <img class="item pr-3" src="{{asset('language/en.png')}}" style="width: 3vw; height:2vh">
                            {{__('messages.english')}}
                        </a>
                        <a id="hover" class="dropdown-item" href="{{ route('switchLang', 'es') }}">
                            <img class="item pr-3" src="{{asset('language/es.png')}}" style="width: 3vw; height:2vh">
                            {{__('messages.spanish')}}
                        </a>
                        <a id="hover" class="dropdown-item" href="{{ route('switchLang', 'eu') }}">
                            <img class="item pr-3" src="{{asset('language/eu.png')}}" style="width: 3vw; height:2vh">
                            {{__('messages.basque')}}
                        </a>
                    </div>
                </li>

            </ul>

            {{--
            If the user is an admin the contact notification dropdown will show
            --}}
            @auth
            @if(Auth::user()->role === 'admin')
            <div class="dropup btn-group show mr-2" id="drop2">
                <button type="button" class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell text-light" viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                    </svg>
                </button>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <ul class="list-unstyled m-0 p-0">
                        <div style="max-height: 250px;overflow: auto;width:350px">
                            @foreach(\App\Models\ContactMessages::unreplied() as $notification)
                            <li class="text-center m-3 border border-secondary rounded">
                                <a href="{{ route('messages.show', $notification) }}">
                                    <button class="btn btn-light text-dark p-0">
                                        <p class="px-1 pt-1">
                                            <strong>Email:</strong> {{ $notification->fromEmail }}
                                        </p>
                                        <p class="px -1">
                                            <strong>Subject:</strong> {{ $notification->subject }}
                                        </p>
                                    </button>
                                </a>
                            </li>
                            @endforeach
                        </div>
                        <li class="dropdown-divider"></li>

                        <button class="btn btn-light text-primary container-fluid justify-content-center">
                            <a class="text-center" href="{{ route('messages.list') }}">Show all messages</a>
                        </button>
                    </ul>
                </div>


            </div>
            @endif
            @endauth
            <ul class="nav navbar-nav navbar-right">
                @guest
                @if (Route::has('login'))

                <a id="login" class="btn text-sucess btn-outline-success mx-1" data-toggle="modal" data-target="#signIn" href="{{ route('login') }}">{{__('auth.sign-in')}}</a>

                @endif

                @if (Route::has('register'))

                <a id="register" class="btn btn-success" data-toggle="modal" data-target="#signUp" href="{{ route('register') }}">{{__('auth.sign-up')}}</a>

                @endif
                @else
                <li id="drop1" class="nav-item btn-group dropup">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('auth.logout') }}
                        </a>

                        <a class="dropdown-item" id="dash_button" href="{{ route('usrDashboard') }}">
                            {{ __('messages.dashboard') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('administrate') }}">
                            {{ __('auth.administrate') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </nav>

    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-light p-4">
                @guest @if (Route::has('login'))
                <li class="nav-item mb-3" style="list-style: none;">
                    <a id="login" data-toggle="modal" data-target="#signIn" class="nav-link btn btn-outline-success" href="{{ route('login') }}">{{__('auth.sign-in')}}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item " style="list-style: none;">
                    <a id="register" data-toggle="modal" data-target="#signUp" class="nav-link btn btn-success" href="{{ route('register') }}">{{__('auth.sign-up')}}</a>
                </li>
                @endif
                @else
                <a class="btn btn-outline-success" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <a class="btn btn-success" id="dash_button" href="{{ route('usrDashboard') }}">
                    {{ __('Dashboard') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @endguest
            </div>
        </div>
    </div>
    <!-- Modal -->
    @include('auth.login')
    @include('auth.register')
</header>

<body id="top">

    <div class="mainSection">
        @section('main')


        @show
    </div>
</body>

<footer class="text-light text-center bg-dark">

    <p> Copyright &copy; 2020-2021 Plants Ego</p>
    <a id="scrollable" href="#top"><i id="scroll" class="fa fa-angle-double-up" aria-hidden="true"></i></a>

</footer>

</body>

</html>