@extends('layouts.app')
@section('title', 'Login')

@section('page_title')
    Login
@endsection

@section('content')
<div class="container" style="margin-top: 7.5%; font-size: 1.5rem">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 0px 1px 9px 9px #D2D3D2;">
                <h4 class="card-header" style="font-weight: 500">{{ __('Login') }}</h4>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input style="font-size: 1.5rem" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="padding: 1rem 0">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input style="font-size: 1.5rem" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button style="font-size: 1.5rem" type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <button style="font-size: 1.5rem" type="reset" class="btn btn-info">Reset</button>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>
                            <div class="col-md-8 offset-md-4">
                                <a href="{{ route('register') }}">Do you have an account? Register here</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection