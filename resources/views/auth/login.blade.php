@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <h3 class="card-header text-center font-weight-bold py-4"
                style="font-family: 'Times New Roman'">{{ __('Login') }}</h3>

                <div class="card-body py-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row my-4">
                            <label for="email" class="col-sm-4 col-form-label text-center"
                            style="font-family: monospace">{{ __('E-Mail Address') }}</label>

                            <div class="col-sm-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-4" >
                            <label for="password" class="col-sm-4 col-form-label text-center"
                                   style="font-family: monospace">{{ __('Password') }}</label>

                            <div class="col-sm-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-4">
                            <div class="col-sm-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                           name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="font-family: monospace">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group my-4 row ">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn w-25 btn-primary" style="font-family: monospace">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn my-3  text-dark btn-link" style="font-family: monospace" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
