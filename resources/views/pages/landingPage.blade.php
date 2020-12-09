@extends('layouts/mainLayout')

{{--C A R O U S E L--}}
@section('landing')
<div id="indicator" class="container carousel slide mt-5 col-9" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#indicator" data-slide-to="0" class="active"></li>
        <li data-target="#indicator" data-slide-to="1"></li>
        <li data-target="#indicator" data-slide-to="2"></li>
    </ol>
    <div class=" carousel-inner ">
        <div id="carImg" class="carousel-item active">
            <img class="d-block w-100" src="images/carousel/web.png" alt="First slide">
            <div class="carousel-caption d-none d-md-block">


            </div>
        </div>
        <div id="carImg" class="carousel-item">

            <img class="d-block w-100" src="images/carousel/ex2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">


            </div>
        </div>
        <div id="carImg" class="carousel-item">

            <img class="d-block w-100" src="images/carousel/ex3.jpg" alt="Third slide">
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

{{--C O L L A P S E --}}
<!--
<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      </div>
    </div>
  </div>
</div>
POPOVER
<button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
-->
@endsection