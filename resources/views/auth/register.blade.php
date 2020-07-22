@extends('layouts.app')

@section('content')
<link href="{{ asset('/css/login.css')}}" rel="stylesheet" />
    <link href="{{ asset('/css/bootstrap.min.css')}}" rel="stylesheet" />

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Register</h5>
                    <form class="form-signin" method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="form-label-group">
                            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Email address" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <label for="name">Name</label>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-label-group">
                            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" value="{{ old('email') }}" required autocomplete="email">
                            <label for="email">Email Address</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="new-password">
                            <label for="password">Password</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="password-confirm" name="password_confirmation" class="form-control" placeholder="Password" required autocomplete="new-password">
                            <label for="password-confirm">Confirm Password</label>
                        </div>
                        
                        <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase">
                            {{ __('Register') }}
                        </button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection