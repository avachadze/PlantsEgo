@extends('layouts/mainLayout')

{{--C A R O U S E L--}}
@section('landing')
<div id="indicator" class="container carousel slide mt-5 col-7" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#indicator" data-slide-to="0" class="active"></li>
        <li data-target="#indicator" data-slide-to="1"></li>
        <li data-target="#indicator" data-slide-to="2"></li>
    </ol>
    <div class=" carousel-inner ">
        <div id="carImg" class="carousel-item active">
            <img id="op" class="d-block w-100" src="images/carousel/ex1.jpg" alt="First slide">
        </div>
        <div id="carImg" class="carousel-item">
            <img class="d-block w-100" src="images/carousel/ex2.jpg" alt="Second slide">

        </div>
        <div id="carImg" class="carousel-item">
            <img class="d-block w-100" src="images/carousel/ex3.jpg" alt="Third slide">

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
@endsection

