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
                    <a class="nav-link" href="/{{__('messages.lang')}}">{{__('messages.home')}} <span class="sr-only">(current)</span></a>
                </li>
                @section ('compatibility')

                @show
                <li class="nav-item">
                    <a class="nav-link" href="/{{__('messages.lang')}}/contact">{{__('messages.contact')}}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{__('messages.language')}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @section ('languages')
                        
                        @show
                    </div>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
            @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a id="login" class="nav-link btn btn-outline-success mx-1" href="{{ route('login', app()->getLocale()) }}">{{__('messages.sign-in')}}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a id="register" class="nav-link btn btn-success" href="{{ route('register', app()->getLocale()) }}">{{__('messages.sign-up')}}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout', app()->getLocale()) }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <a class="dropdown-item" id="dash_button" href="{{ route('usrDashboard', app()->getLocale()) }}">
                                {{ __('Dashboard') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

    </nav>

    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-light p-4">
                < @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a id="login" class="nav-link btn btn-outline-success mx-1" href="{{ route('login', app()->getLocale()) }}">{{__('messages.sign-in')}}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a id="register" class="nav-link btn btn-success" href="{{ route('register', app()->getLocale()) }}">{{__('messages.sign-up')}}</a>
                        </li>
                    @endif
                @else
                        <a class="btn btn-outline-success" href="{{ route('logout', app()->getLocale()) }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <a class="btn btn-success" id="dash_button" href="{{ route('usrDashboard', app()->getLocale()) }}">
                            {{ __('Dashboard') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" class="d-none">
                            @csrf
                        </form>
                @endguest
            </div>
        </div>
    </div>
</header>

<body id="top">


    @section('main')


    @show
</body>

<footer class="text-light text-center bg-dark">
    <p> Copyright &copy; 2020-2021 Plants Ego</p>
    <a id="scrollable" class="text-light" href="#top">Go Top</a>
</footer>

</body>

</html>