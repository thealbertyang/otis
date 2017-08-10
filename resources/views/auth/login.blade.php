@extends('layouts.login')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m4 offset-m4">
            <img class="login-logo responsive-img" src="{{asset('/img/otis-logo.png')}}">
        </div>
        <div class="col s12 m8 offset-m2">
            <div class="panel panel-default">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                            <label for="email" {{ $errors->has('email') ? 'data-error="wrong"' : '' }}>E-Mail Address</label>
                        </div>
                           
                        <div class="input-field col s12">
                            <i class="material-icons prefix">vpn_key</i>
                            <input id="password" type="password" name="password" required>
                            <label for="password" {{ $errors->has('password') ? 'data-error="wrong"' : '' }}>Password</label>
                        </div>

                        <div class="col s12 right-align">
                            <a class="btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6 offset-s3">
                            <button type="submit" class="btn btn-large col s12">
                                Login
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
