<!-- Modal -->
<script src="/jquery/registerValidation.js"></script>
<style>
    .logo-margin-negative {
        margin-top: -100px;
        display: inline-block;
        
        max-height: 20vh;
   
        min-width: 15vw;
    }
</style>
<div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h4  class="modal-title col-11 text-center"><img src="img/logo.png" class="logo-margin-negative col-5"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                
                    

                    <div class="row justify-content-center">
                        <div class="col-md-12">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <input type="text" class="d-none form-control" value="user" id="role" name="role" required autocomplete="role">

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('auth.name') }}</label>

                                            <div class="inputWithIcon">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="emailC" class="col-md-4 col-form-label text-md-right">{{ __('auth.email') }}</label>

                                            <div class="inputWithIcon">
                                                <input id="emailC" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('passwords.password') }}</label>

                                            <div class="inputWithIcon">
                                                <input id="pass" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('passwords.confirm') }}</label>

                                            <div class="inputWithIcon">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button id="registerBtn" type="submit" class="btn btn-primary">
                                                    {{ __('auth.register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            
                        </div>
                    </>
                </div>
            

        </div>
    </div>
</div>