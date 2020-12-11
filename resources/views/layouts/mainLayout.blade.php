<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="icon" href="{{URL::asset('images/logo.png')}}">

    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link rel="stylesheet" href="css/style.css">
    <script src="{{mix('js/app.js')}}"></script>

    </style>
    <meta charset="utf-8">
    <title>Plants EGO</title>
</head>

<body id="myPage">
    <header class="bg-light">
        <nav class="head container-fluid navbar justify-content-between  navbar-expand-sm">
            <nav class="navbar navbar-expand-lg navbar-light">
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
            <a href="#myPage" title="To Top"><img id="scroll" src="images/arrow.png" alt=""></a>
        </footer>

        <script>
            $(document).ready(function() {

                $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
                    if (this.hash !== "") {
                        event.preventDefault();
                        var hash = this.hash;

                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 900, function() {
                            window.location.hash = hash;
                        });
                    }
                });
                $(window).scroll(function() {
                    $(".slideanim").each(function() {
                        var pos = $(this).offset().top;

                        var winTop = $(window).scrollTop();
                        if (pos < winTop + 600) {
                            $(this).addClass("slide");
                        }
                    });
                });
            })
        </script>
</body>

</html>