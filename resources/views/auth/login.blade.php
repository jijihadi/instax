@extends('layouts.main')

@section('content')
    <div id="lp-register">
        <div class="container wrapper">
            <div class="row">
                <div class="col-sm-5">
                    <div class="intro-texts">
                        <h1 class="text-white">Make Friends !!!</h1>
                        <p>Friend Finder is a social network template that can be used to connect people. The template
                            offers Landing pages, News Feed, Image/Video Feed, Chat Box, Timeline and lot more. <br />
                            <br />Why are you waiting for? Buy it now.
                        </p>
                        {{-- <button class="btn btn-primary">Learn More</button> --}}
                    </div>
                </div>
                <div class="col-sm-6 col-sm-offset-1">
                    <div class="reg-form-container">

                        <!-- Register/Login Tabs-->
                        <div class="reg-options">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#register" data-toggle="tab">Register</a></li>
                                <li><a href="#login" data-toggle="tab">Login</a></li>
                            </ul>
                            <!--Tabs End-->
                        </div>

                        <!--Registration Form Contents-->
                        <div class="tab-content">
                            <div class="tab-pane active" id="register">
                                <h3>Register Now !!!</h3>
                                <p class="text-muted">Be cool and join today. Meet millions</p>

                                <!--Register Form-->
                                <form method="POST" action="{{ route('register') }}" name="registration_form"
                                    id='registration_form' class="form-inline">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-xs-12">
                                            <label for="firstname" class="sr-only">Name</label>
                                            <input id="name" type="text"
                                                class="form-control input-group-lg @error('name') is-invalid @enderror"
                                                name="name" value="{{ old('name') }}" autocomplete="name"
                                                autofocus placeholder="Name">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xs-12">
                                            <label for="email" class="sr-only">Email</label>
                                            <input id="email" type="email"
                                                class="form-control input-group-lg @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" autocomplete="email"
                                                placeholder="Your Email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xs-12">
                                            <label for="password" class="sr-only">Password</label>
                                            <input id="password" type="password"
                                                class="form-control input-group-lg @error('password') is-invalid @enderror"
                                                name="password" autocomplete="new-password" placeholder="Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xs-12">
                                            <label for="password-confirm" class="sr-only">Confirm Password</label>
                                            <input id="password-confirm" type="password"
                                                class="form-control input-group-lg " name="password_confirmation"
                                                autocomplete="new-password" placeholder="Confirm Password">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <p class="birth"><strong>Date of Birth</strong></p>
                                        <div class="form-group col-sm-3 col-xs-6">
                                            <label for="month" class="sr-only"></label>
                                            <select class="form-control" id="day" name="day">
                                                <option value="Day" disabled selected>Day</option>
                                                @for ($i = 1; $i < 32; $i++)
                                                    <option>{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-3 col-xs-6">
                                            <label for="month" class="sr-only"></label>
                                            <select class="form-control" id="month" name="month">
                                                <option value="month" disabled selected>Month</option>
                                                <option value="1">Jan</option>
                                                <option value="2">Feb</option>
                                                <option value="3">Mar</option>
                                                <option value="4">Apr</option>
                                                <option value="5">May</option>
                                                <option value="6">Jun</option>
                                                <option value="7">Jul</option>
                                                <option value="8">Aug</option>
                                                <option value="9">Sep</option>
                                                <option value="10">Oct</option>
                                                <option value="11">Nov</option>
                                                <option value="12">Dec</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="year" class="sr-only"></label>
                                            <select class="form-control" id="year" name="year">
                                                <option value="year" disabled selected>Year</option>
                                                @for ($i = 1990; $i < date('Y'); $i++)
                                                    <option>{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                        @error('births')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group gender">
                                        <label class="radio-inline">
                                            <input type="radio" name="sex" value="1">Male
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="sex" value="2">Female
                                        </label>
                                        @error('sex')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <br>
                                    <button class="btn btn-primary" type="submit">Register Now</button>
                                </form>
                                <!--Register Now Form Ends-->
                            </div>
                            <!--Registration Form Contents Ends-->

                            <!--Login-->
                            <div class="tab-pane" id="login">
                                <h3>Login</h3>
                                <p class="text-muted">Log into your account</p>

                                <!--Login Form-->
                                <form method="POST" action="{{ route('login') }}" name="Login_form" id='Login_form'>
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-xs-12">
                                            <label for="my-email" class="sr-only">Email</label>
                                            <input id="my-email"
                                                class="form-control input-group-lg  @error('email') is-invalid @enderror"
                                                type="text" title="Enter Email" type="email" name="email"
                                                value="{{ old('email') }}" autocomplete="email" autofocus
                                                placeholder="Email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xs-12">
                                            <label for="my-password" class="sr-only">Password</label>
                                            <input id="my-password" type="password"
                                                class="form-control input-group-l @error('password') is-invalid @enderror"
                                                name="password" autocomplete="current-password" placeholder="Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--Login Form Ends-->
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
                                    <button class="btn btn-primary" type="submit">Login Now</button>
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
            <div class="row">
                <div class="col-sm-6 col-sm-offset-6">

                    <!--Social Icons-->
                    <ul class="list-inline social-icons">
                        <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
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
</div> --}}
@endsection
