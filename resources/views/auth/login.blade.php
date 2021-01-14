<script src="/jquery/loginValidation.js"></script>
<link rel="stylesheet" href="css/forms.css">
<style>
    .logo-margin-negative {
        margin-top: -100px;
        margin-left: 1vh;
        height: 25vh;
        min-width: 15vw;
    }

   
</style>
<div class="modal fade" id="signIn" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div id="logo" class="d-flex modal-header ">
                <h4 class="modal-title col-11 text-center"><img src="img/logo.png" class="logo-margin-negative col-5"></h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="card-body">
                <h4 style="text-align: center;">Log In</h4>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row row justify-content-center">
        
                        <div class="inputWithIcon">
                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('auth.email') }}">
                                <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
                            


                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                       
                        <div class="inputWithIcon">
                           
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('passwords.password') }}">
                            <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('auth.remember') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button id="sendLogin" type="submit" class="btn btn-primary">
                                {{ __('auth.login') }}
                            </button>

                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('passwords.forgot') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </form>



                @if(Session::has('AuthError'))
                <div class="alert alert-lightWarning border border-lightWarningBorder mt-4 animate__animated animate__backInUp">
                    <h3>{{ Session::get('AuthError') }}</h3>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>