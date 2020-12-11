<!DOCTYPE html>
<html>
<head>
    <style>
        .carousel-inner img
        {
            width: 100%;
            max-height: 460px;
        }

        .carousel-inner
        {
            height: 45vh;
            width: 100%;
        }

        body
        {
            background-image: url("img/fondo.png");
            background-color: white;
        }

        #logo
        {
            width: 70px;
        }
        .accImg
        {
            width: 100%;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ mix('js/app.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}"/>
    <title>PlantsEGO</title>
</head>
<body>

{{-- Header --}}
<header class="container-fluid navbar bg-success justify-content-between align-items-end">
    <img class="rounded-circle m-2" src="img/logo.png" id="logo">
    <ul class="nav mb-2">
        <li class="nav-item">

            <a class="nav-link btn btn-outline-info btn-info text-light mr-3 pl-2">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
                    <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
                </svg>
                Management
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn btn-outline-info btn-info text-light mr-3">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn btn-outline-info btn-info text-light">Register</a>
        </li>
    </ul>
</header>

<main>

    {{-- Carousel --}}
    <section id="carousel" class="carousel slide container-fluid px-5" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-bs-target="#carousel" data-slide-to="1"></li>
            <li data-bs-target="#carousel" data-slide-to="2"></li>
            <li data-bs-target="#carousel" data-slide-to="3"></li>
        </ol>

        <article class="carousel-inner">

            <div class="carousel-item active">
                <img src="img/riego1.jpeg" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="img/riego2.jpg" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="img/riego3.jpg" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="img/riego4.jpg" class="d-block w-100">
            </div>

            <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>

            <a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>

        </article>
    </section>

    <div class="container justify-content-around d-flex mt-5">

        {{-- Info Paragraph --}}
        <aside class="col-6 border border-success bg-light rounded p-3 ">
            <h1 class="border-bottom border-secondary pb-2">
                What does PlantsEGO offer?
            </h1>
            <p>
                We offer the installation of an Arduino-based automatic irrigation system and a personal management tab to keep track of your systems.
            </p>
            <p>
                Besides, you can enable and disable automatic irrigation as well as you can force irrigation just by clicking a button.
            </p>
            <p>
                The management tab will also include graphs to keep track of the humidity, temperature and other valuable information.
            </p>
            <p>
                We support two kinds of user accounts: Personal is small project oriented and Corporative is industrial grade oriented.
            </p>
            <p>
                After registering and contacting us to install a system a technician will install it and enable the management functions of your management tab.
            </p>
        </aside>

        {{-- Accordion --}}
        <section class="col-6 accordion rounded" id="specAccordion">
            <article class="card-item bg-info border border-dark rounded-top">
                <h2 class="card-header" id="specAccordion-headingOne">
                    <button class="btn btn-link btn-block text-left text-dark" type="button" data-toggle="collapse" data-target="#specAccordion-collapseOne" aria-expanded="false" aria-controls="specAccordion-collapseOne">
                        Component #1
                    </button>
                </h2>
                <div id="specAccordion-collapseOne" class="collapse show" aria-labelledby="specAccordion-headingOne" data-parent="#specAccordion">
                    <div class="card-body bg-light border border-info">
                        <img class="accImg" src="img/pieza.png">
                    </div>
                </div>
            </article>

            <article class="card-item bg-info border border-dark">
                <h2 class="card-header" id="specAccordion-headingTwo">
                    <button class="btn btn-link btn-block text-left text-dark" type="button" data-toggle="collapse" data-target="#specAccordion-collapseTwo" aria-expanded="false" aria-controls="specAccordion-collapseTwo">
                        Component #2
                    </button>
                </h2>
                <div id="specAccordion-collapseTwo" class="collapse" aria-labelledby="specAccordion-headingTwo" data-parent="#specAccordion">
                    <div class="card-body bg-light border border-info">
                        <img class="accImg" src="img/pieza.png">
                    </div>
                </div>
            </article>

            <article class="card-item bg-info border border-dark rounded-bottom">
                <h2 class="card-header" id="specAccordion-headingThree">
                    <button class="btn btn-link btn-block text-left text-dark" type="button" data-toggle="collapse" data-target="#specAccordion-collapseThree" aria-expanded="false" aria-controls="specAccordion-collapseThree">
                        Component #3
                    </button>
                </h2>
                <div id="specAccordion-collapseThree" class="collapse" aria-labelledby="specAccordion-headingThree" data-parent="#specAccordion">
                    <div class="card-body bg-light border border-info">
                        <img class="accImg" src="img/pieza.png">
                    </div>
                </div>
            </article>
        </section>
    </div>
</main>
<footer id="footer" class="container-fluid text-light py-3 bg-secondary mt-5">
    <h4 class="text-center">Enter your email if you want to recieve more information</h4>
    <form class="container mt-3 w-25">
        <div class="form-group">
            <label for="mail">E-mail:</label>
            <input type="text" class="form-control" id="mail">
        </div>
        <input type="button" value="send">
    </form>
</footer>
</body>
</html>
