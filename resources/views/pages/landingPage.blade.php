@extends('layouts/mainLayout')

{{--C A R O U S E L--}}
@section('landing')
<div id="indicator" class="container carousel slide mt-5 col-s-9" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#indicator" data-slide-to="0" class="active"></li>
    <li data-target="#indicator" data-slide-to="1"></li>
    <li data-target="#indicator" data-slide-to="2"></li>
  </ol>
  <div class=" carousel-inner ">
    <div id="carImg" class="carousel-item active">
      <img id="carouselImage" class="img-fluid d-block w-100" src="images/carousel/web.png" alt="First slide">
      <div class="carousel-caption d-none d-md-block">


      </div>
    </div>
    <div id="carImg" class="carousel-item">

      <img id="carouselImage" class="img-fluid d-block w-100" src="images/carousel/ex2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">


      </div>
    </div>
    <div id="carImg" class="carousel-item">

      <img id="carouselImage" class="img-fluid d-block w-100" src="images/carousel/ex3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">


      </div>>
    </div>
  </div>
  <a class="carousel-control-prev" href="#indicator" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#indicator" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

{{--C A R D S  --}}

<!-- Divider line -->
<div class="col-lg-8 mx-auto">
  <div class="mb-4">
    <hr data-content="INFO" class="hr-text">
  </div>
</div>


<div id="card" class="row justify-content-around mt-5">
  <div class="card border-primary mb-3" style="max-width: 18rem;">
    <div id="cardHead" class="card-header">Technicians</div>
    <div class="card-body">
      <p id="textCard" class="card-text">You are not going to have to look for technicials near you. We are going to send the best qualified technicians for your irrigation system.</p>
    </div>
  </div>
  <div class="card border-primary mb-3" style="max-width: 18rem;">
    <div id="cardHead" class="card-header">Full Control Online</div>
    <div class="card-body">
      <p id="textCard" class="card-text">If you are having a back paing checking every system just to see if they are working then this is for you. Full Web access for all our clients. You are going to be able to control the irrigation system without leaving home. Check the temperature and much more!</p>
    </div>
  </div>
  <div class="card border-primary mb-3" style="max-width: 18rem;">
    <div id="cardHead" class="card-header">Flexibility</div>
    <div class="card-body ">
      <p id="textCard" class="card-text">Not everyone has a computer nowadays, that is why we decided to have access from tablets and phones. The system is 100% flexible for the users.</p>
    </div>
  </div>
  <div class="card border-primary mb-3" style="max-width: 18rem;">
    <div id="cardHead" class="card-header">Fast Customer Service</div>
    <div class="card-body">
      <p id="textCard" class="card-text">We always check if our client is satisfied. Shorte response times and fast fixes. If there is a problem on the website OR with the irrigation system we will be more than welcome to help you out with one of our workers. </p>
    </div>
  </div>
</div>

{{--Jumbo Tron--}}
<!-- Divider line -->
<div class="col-lg-8 mx-auto">

  <div class="mb-4">
    <hr data-content="INFO" class="hr-text">
  </div>
</div>





@endsection