<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{URL::asset('img/logo.png')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plants Ego</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script src="{{mix('js/app.js') }}"></script>
    <script src="js/scroll.js"></script>
    <link rel="stylesheet" href="node_modules/animate.css/animate.css">

</head>
<nav class="navbar navbar-expand-lg navbar-light" id="nav">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="navbar-toggler-icon"></div>
    </button>
    <a class="navbar-brand" href="/"><img src="img/logo.png" alt="" id="logo"></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            @section('compatibility')

            @show
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact Us</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item ">
                <button type="submit" class="btn btn-outline-success mx-1" id="login">Sign in</button>
            </li>
            <li class="nav-item ">
                <button type="submit" class="btn btn-success " id="register">Sign up</button>
            </li>
</nav>
<div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-light p-4">
            <h4 class="text-dark">Log in or register</h4>
            <button type="submit" class="btn btn-outline-success" id="login">Sign in</button>
            <button type="submit" class="btn btn-success " id="register">Sign up</button>

        </div>
    </div>
</div>

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