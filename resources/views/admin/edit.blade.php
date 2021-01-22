<h1>edit</h1>
<div class="form-group row justify-content-center">
    <label for="emailC" class="col-3 col-form-label text-md-right">{{ __('auth.email') }}</label>

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