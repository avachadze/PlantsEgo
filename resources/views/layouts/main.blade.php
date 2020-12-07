<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="icon" href="{{URL::asset('images/logo.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    </style>
    <meta charset="utf-8">
    <title>Plants EGO</title>
</head>

<body>
    <header class="d-flex justify-content-between fixed-top bg-light">
        <nav class="container-fluid navbar justify-content-between bg-light navbar-expand-sm">
            <a class="navbar-brand" href="#">
                <img id="logo" src="images/logo.png" width="60" height="60" class="shadowfilter mx-2">
            </a>

            
            <div class="my-2">
                <button type="button" class="btn btn-primary">Log In</button>
                <button type="button" class="btn btn-success">Sign In</button>
            </div>
            </nav>
    </header>
</body>

</html>