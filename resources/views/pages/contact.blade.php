@extends('layouts/mainLayout')
@section('main')

<section class="container my-5">

  <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>

  <p class="text-center w-responsive mx-auto pb-5">We have employees looking forward to reply to any of your problem or ideas. Contact us for anything you need, we also hire personal. Send information about your experience and past jobs and we will be contacting you as soon as possible,</p>

  <div class="row">

    <div class="col-lg-5 mb-lg-0 mb-4">
      <div class="card">
        <div class="card-body">

          <div class="form-header blue accent-1">
            <h3 class="mt-2"><i class="fas fa-envelope"></i> Write to us:</h3>
          </div>
          <div class="md-form">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" id="form-name" class="form-control">
            <label for="form-name">Your name</label>
          </div>
          <div class="md-form">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="text" id="form-email" class="form-control">
            <label for="form-email">Your email</label>
          </div>
          <div class="md-form">
            <i class="fas fa-tag prefix grey-text"></i>
            <input type="text" id="form-Subject" class="form-control">
            <label for="form-Subject">Subject</label>
          </div>
          <div class="md-form">
            <i class="fas fa-pencil-alt prefix grey-text"></i>
            <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
            <label for="form-text">Send message</label>
          </div>
          <div class="text-center">
            <button class="btn btn-outline-primary waves-effec">Submit</button>
          </div>
        </div>
      </div>


    </div>
    <div class="col-lg-7">
      <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
        <iframe id="location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.4088683443806!2d-1.9720729848761347!3d43.326632579133864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51a5417f7bf2fd%3A0x8654b5f1f9a490ae!2sIES%20Xabier%20Zubiri%20Manteo%20BHI!5e0!3m2!1ses!2ses!4v1608032536311!5m2!1ses!2ses" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-map-marker-alt"></i>
          </a>
          <p>Donostia, 20012</p>
          <p class="mb-md-0">Guipuzcoa</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-phone"></i>
          </a>
          <p>943 89 92 92</p>
          <p class="mb-md-0">Mon - Fri, 8:00-22:00</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-envelope"></i>
          </a>
          <p>plantsEGO@gmail.com</p>
          <p class="mb-0">Plants EGO</p>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection