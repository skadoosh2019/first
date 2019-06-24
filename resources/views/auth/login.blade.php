@extends('layouts.main')

@section('styles')

@endsection

@section('content')
    <!-- Page Content -->
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="images/logo-light.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <h3>Securities Digital Securities Trading Platform.</h3>
                        <p>The next generation of Securities Digital Securities Trading Platform built for businesses
                            and investors to propel liquidity.</p>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning">
                                {{ session('warning') }}
                            </div>
                        @endif
                        <div class="page-links">
                            <a href="{{route('login')}}" class="active">Login</a>
                            <a href="{{route('createAccount')}}">Register</a>
                        </div>
                        <form id="loginform" action="{{ route('dashboard') }}" method="post">
                            {{ csrf_field() }}
                            <input class="form-control" type="text" name="username" placeholder="E-mail Address"
                                   required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button>
                                <a href="{{ route('password.request') }}">Forget password?</a>
                            </div>
                        </form>
                        <div class="other-links">
                            <span>We are Social</span>
                            <a href="https://www.facebook.com/Securitief-453653825439636">Facebook</a>
                            <a href="https://twitter.com/securitief">Twitter</a>
                            <a href="https://www.linkedin.com/company/securitief">Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
