@extends('layouts.app')

@section('content')
<link href="{{ asset('/css/login.css')}}" rel="stylesheet" />
    <link href="{{ asset('/css/bootstrap.min.css')}}" rel="stylesheet" />

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Sign In</h5>
                    <form class="form-signin" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-label-group">
                            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="email">Email address</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password">
                            <label for="password">Password</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="custom-control custom-checkbox mb-3">
                            <div class="form-check">
                                <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase">
                            {{ __('Login') }}
                        </button>
                        
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection