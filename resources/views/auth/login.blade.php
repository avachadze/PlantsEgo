<script src="{{asset('/jquery/loginValidation.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/forms.css')}}">
<style>
    .logo-margin-negative {
        margin-top: -100px;
        margin-left: 1vh;
        height: 25vh;
        min-width: 15vw;
    }
</style>
<div class="modal fade mt-3" id="signIn" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div id="modalWindow" class="modal-content">
            <div class="d-flex modal-header">
                
                <h4 class="modal-title col-11 text-center"><img id="logoRotate" src="{{asset('img/logo.png')}}" class="logo-margin-negative ml-5"></h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="card-body ">
                
                <h1 class=" text-center">Log In</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row justify-content-center">

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


                    <div class="form-group row justify-content-center">
                        <div class="col-6">
                            <button id="sendLogin" type="submit" class="btn btn-primary btn-block">
                                {{ __('auth.login') }}
                            </button>
                        </div>

                    </div>
                </form>
                <div id="forgotPass" class="text-center">

                    @if(Session::has('AuthError'))
                    <div class="alert alert-lightWarning border border-lightWarningBorder mt-4 animate__animated animate__backInUp">
                        <h3>{{ Session::get('AuthError') }}</h3>
                    </div class="col-12 text-center">
                    @endif

                    @if (Route::has('password.request'))

                    <a class="btn btn-link justify-content-center" href="{{ route('password.request') }}">
                        {{ __('passwords.forgot') }}
                    </a>
                    @endif
                </div>




                <div class="col-md-12 form-group row justify-content-center">
                    <div class="">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('auth.remember') }}
                            </label>
                        </div>
                    </div>
                </div>






            </div>
        </div>
    </div>
</div>