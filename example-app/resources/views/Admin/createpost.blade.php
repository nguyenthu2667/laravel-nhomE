@extends('dashboard')

@section('content')
<div class="wrapper">
    @include('layouts.navbars.sidebar')
    <div class="main-panel">
        @include('layouts.navbars.navbar')

        <div class="content">
            @yield('content')
        </div>

        @include('layouts.footer')
    </div>
</div>
<div class="content">
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <form class="form" method="post" action="{{ route('login.custom') }}">
            @csrf
            <div class="card card-login card-white">
                <div class="card-header">
                    <img src="{{ asset('img/card-primary.png') }}" alt="">
                    <h1 class="card-title">{{ __('Log in') }}</h1>
                </div>
                <div class="card-body">
                    {{-- email --}}
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" placeholder="Email" id="email" class="form-control" name="email"
                            required autofocus>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    {{-- passs --}}
                    <div class="form-group mb-3">
                        <input type="password" placeholder="Password" id="password" class="form-control"
                            name="password" required>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>


                    <div class="form-group mb-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-grid mx-auto">
                        <button type="submit" class="btn btn-dark btn-block">Signin</button>
                    </div>
                    <div class="pull-left">
                        <h6>
                            <a href="{{ route('register-user') }}"
                                class="link footer-link">{{ __('Create Account') }}</a>
                        </h6>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<form id="logout-form" class="form" method="get" action="{{ route('signout') }}">
    @csrf
</form>
@endsection