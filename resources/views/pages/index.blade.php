<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="{{URL::asset('img/logo.png')}}">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plants Ego</title>

  <link rel="stylesheet" href="{{mix('css/app.css')}}">
  <script src="{{mix('js/app.js') }}"></script>

  <link rel="stylesheet" href="node_modules/animate.css/animate.css">
</head>

<body>
  <div class="fotoheader">

    <h1 class="title animate__animated animate__backInDown">Plants Ego</h1>
    <h2 class="subtitle animate__animated animate__backInDown">The best admin panel for your irrigation system.</h2>

  </div>
  <header>

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
          <li class="nav-item">
            <a class="nav-link" href="#compatibility">Compatibility</a>
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
  </header>
  <main>
    <div class="bg-dark fotosapp ordenador">
      <div class="container ordenador">
        <div class="row pt-5">
          <img src="img/carousel 1/dashboard plantsego.jpg" class="col-9 fotopequeña" alt="" id="">
          <img src="img/dashboard mobile.png" alt="" class="col-3 fotopequeña">
        </div>
      </div>
    </div>


    <div class="bg-dark pagina pt-5">
      <div class="pt-5 movil">
        <h1 class="movil title-movil text-light">Plantsego</h1>
        <h2 class="movil title-movil text-light">The best admin panel for your irrigation system</h2>
        <img src="img/carousel 1/dashboard plantsego.jpg" class="mx-auto d-block" id="fotopanel" alt="">
      </div>

      <div class="jumbotron mt-5 mx-auto">
        <h1 class="display-4">Try the system for free!</h1>
        <p class="lead">We have a demonstration of the application to try and decide if you buy it or not</p>
        <hr class="my-4">
        <p>The data that we show in the demonstration is random.</p>
        <p class="lead">
          <a class="btn btn-success btn-lg" href="#" role="button">Go to demo</a>
        </p>
      </div>

    </div>

    <div class="align-items-center" id="beneficios">
      <a name="compatibility"></a>
      <h2 class="text-center text-light">Compatible with all irrigation systems.</h2>
      <div class="container ">
        <div class="row d-flex justify-content-betwen">
          <div class="card col-12 col-sm-6 col-lg-3">
            <img class="card-img-top" src="img/goteo.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">
                This system is fully compatible with drip irrigation systems</p>
            </div>

          </div>
          <div class="card col-12 col-sm-6  col-lg-3" style="width: 18rem;">
            <img class="card-img-top" src="img/aspersor.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">This system is fully compatible with arpersors</p>
            </div>
          </div>
          <div class="card col-12 col-sm-6  col-lg-3" style="width: 18rem;">
            <img class="card-img-top" src="img/difusor.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">
                This system is fully compatible with diffusers</p>
            </div>
          </div>
          <div class="card col-12 col-sm-6 col-lg-3" style="width: 18rem;">
            <img class="card-img-top" src="img/soterrat.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">
                This system is fully compatible with underground irrigation</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="variables pt-3">
      <h2 class="text-light text-center">Variables that we work with</h2>
      <div class="d-flex flex-direction-row justify-content-between align-items-center align-content-around flex-wrap">
        <div class="magnitudes">
          <img src="img/termometro.png" alt="" class="variable-icon ">
          <h3 class="text-light text-center">Temperature</h3>
        </div>
        <div class="magnitude">
          <img src="img/ground humidity.png" alt="" class="variable-icon ">
          <h3 class="text-light text-center">Ground Humidity</h3>
        </div>
        <div class="magnitude">
          <img src="img/humidity.png" alt="" class="variable-icon ">
          <h3 class="text-light text-center">Air Humidity</h3>
        </div>
        <div class="magnitude">
          <img src="img/ls.png" alt="" class="variable-icon">
          <h3 class="text-light text-center">Liters per second</h3>
        </div>
      </div>
    </div>

  </main>
  <footer class="bg-dark text-light text-center">Copyright &copy; 2020-2021 Plants Ego</footer>
</body>

</html>