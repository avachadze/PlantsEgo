<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{URL::asset('img/logo.png')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plants Ego</title>
    <link rel="stylesheet" href="/node_modules/animate.css/animate.css">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script src="{{mix('js/app.js') }}"></script>

</head>
@section ('photoHeader')

@show
<header>

    <nav class="navbar navbar-expand-lg navbar-light" id="nav">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="navbar-toggler-icon"></div>
        </button>
        <a class="navbar-brand" href="/"><img src="img/logo.png" alt="" id="logo"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">{{__('messages.home')}} <span class="sr-only">(current)</span></a>
                </li>
                @section ('compatibility')

                @show
                <li class="nav-item">
                    <a class="nav-link" href="/contact">{{__('messages.contact')}}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__('messages.language')}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('switchLang', 'en') }}">{{__('messages.english')}}</a>
                        <a class="dropdown-item" href="{{ route('switchLang', 'es') }}">{{__('messages.spanish')}}</a>
                        <a class="dropdown-item" href="{{ route('switchLang', 'eu') }}">{{__('messages.basque')}}</a>
                    </div>
                </li>

            </ul>

            {{--
            If the user is an admin the contact notification dropdown will show
            --}}
            @auth
                @if(Auth::user()->role === 'admin')
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell text-light" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                            </svg>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                        </div>
                    </div>
                @endif
            @endauth
            <ul class="nav navbar-nav navbar-right">
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a id="login" class="nav-link btn btn-outline-success mx-1" data-toggle="modal" data-target="#signIn" href="{{ route('login') }}">{{__('auth.sign-in')}}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a id="register" class="nav-link btn btn-success" data-toggle="modal" data-target="#signUp" href="{{ route('register') }}">{{__('auth.sign-up')}}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <a class="dropdown-item" id="dash_button" href="{{ route('usrDashboard') }}">
                            {{ __('Dashboard') }}
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
                < @guest @if (Route::has('login')) <li class="nav-item">
                    <a id="login" class="nav-link btn btn-outline-success mx-1" href="{{ route('login') }}">{{__('auth.sign-in')}}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a id="register" class="nav-link btn btn-success" href="{{ route('register') }}">{{__('auth.sign-up')}}</a>
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

    <div class="mt-5">
        @section('main')


        @show
    </div>
</body>

<footer class="text-light text-center bg-dark">
    <p> Copyright &copy; 2020-2021 Plants Ego</p>
    <a id="scrollable" class="text-light" href="#top">Go Top</a>
</footer>

</body>

</html>
