@extends('layouts/mainLayout')

@section('compatibility')

<li class="item nav-item">
  <a class="nav-link" href="#beneficios">{{__('messages.compatibility')}}</a>
</li>
@endsection

@section('photoHeader')
<div class="fotoheader">

  <h1 class="title animate__animated animate__backInDown">Plants Ego</h1>
  <h2 class="subtitle animate__animated animate__backInDown">{{__('messages.subtitle')}}</h2>

</div>



@endsection

@section('main')



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
      <h2 class="movil title-movil text-light">{{__('messages.subtitle')}}</h2>
      <img src="img/carousel 1/dashboard plantsego.jpg" class="mx-auto d-block" id="fotopanel" alt="">
    </div>

    <div class="jumbotron mt-5 mx-auto">
      <h1 class="display-4">{{__('messages.jumbotitle')}}</h1>
      <p class="lead">{{__('messages.jumbosubtitle')}}</p>
      <hr class="my-4">
      <p>{{__('messages.jumbotext')}}</p>
      <p class="lead">
        <a  class="btn btn-success" data-toggle="modal" data-target="#signUp" href="{{ route('register') }}">{{__('messages.jumbobutton')}}</a>
      </p>
    </div>

  </div>

  <div class="align-items-center" id="beneficios">
    <a name="compatibility"></a>
    <h2 class="text-center text-light">{{__('messages.comptitle')}}</h2>

    <div class="card-deck">
      <div id="card1" class="grow card m-1">
        <img class="card-img-top" src="img/goteo.jpg" alt="Card image cap">
        <div class="card-body">
          <p id="card1Text" class="card-text">
            {{__('messages.card1')}}
          </p>
        </div>

      </div>
      <div class="grow card m-1">
        <img class="card-img-top" src="img/aspersor.jpg" alt="Card image cap">
        <div class="card-body">
          <p id="card2Text" class="card-text">{{__('messages.card2')}}</p>
        </div>
      </div>
      <div class="grow card  m-1">
        <img class=" card-img-top" src="img/difusor.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">
            {{__('messages.card3')}}
          </p>
        </div>
      </div>
      <div class="grow card m-1">
        <img class=" card-img-top" src="img/soterrat.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">
            {{__('messages.card4')}}
          </p>
        </div>
      </div>

    </div>
  </div>

  <div class="variables pt-3">
    <h2 class="text-light text-center">{{__('messages.variables')}}</h2>
    <div class="d-flex flex-direction-row justify-content-around align-items-center align-content-around flex-wrap">
      <div class="magnitudes">
        <img src="img/termometro.png" alt="" class="variable-icon ">
        <h3 class="text-light text-center">{{__('messages.temperature')}}</h3>
      </div>
      <div class="magnitude">
        <img src="img/ground humidity.png" alt="" class="variable-icon ">
        <h3 class="text-light text-center">{{__('messages.ground-humidity')}}</h3>
      </div>
      <div class="magnitude">
        <img src="img/humidity.png" alt="" class="variable-icon ">
        <h3 class="text-light text-center">{{__('messages.air-humidity')}}</h3>
      </div>
      <div class="magnitude">
        <img src="img/ls.png" alt="" class="variable-icon">
        <h3 class="text-light text-center">{{__('messages.Liters-per-second')}}</h3>
      </div>
    </div>
  </div>

</main>
@endsection
