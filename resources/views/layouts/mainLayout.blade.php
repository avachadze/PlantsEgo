<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="icon" href="{{URL::asset('images/logo.png')}}">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    </style>
    <meta charset="utf-8">
    <title>Plants EGO</title>
</head>

<body>
    <header>
        <nav class="head container-fluid navbar justify-content-between  navbar-expand-sm">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img id="logo" src="images/logo.png" width="60" height="60" class="logo ">
                </a>
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Home</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Product</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <div class="my-2">
                <button type="button" class="btn btn-outline-success">Log In</button>
                <button type="button" class="btn btn-outline-secondary">Sign Up</button>
            </div>
        </nav>
    </header>

    @section('landing')
    @show

    <footer>
    <footer>

<a href=""><img id="footerImage" class="col-4" src="images/logo.png" alt=""></a>

    </footer>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>