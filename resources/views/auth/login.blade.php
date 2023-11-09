@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: calc(100vh - 80px);">
        <div class="row justify-content-center">
            <div class="col-md-13"> <!-- Increase the width -->
                <div class="card">
                    <div class="card-header bg-info text-white">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-5 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-7">
                                    <input id="email" type="email"
                                           placeholder="Enter your email address"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="password" class="col-md-5 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-7">
                                    <input id="password" type="password"
                                             placeholder="Enter your password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-10 offset-md-3">
                                    <button type="submit" class="btn btn-info btn-block" style="width: 150px;">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>

                            <!-- <div class="row">
                                <div class="col-md-8 offset-md-4 text-center"> 
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
