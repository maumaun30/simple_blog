@extends('layouts.app')

@section('content')
    <div class="container fs15 resp-mgt70">
        <div class="row">

            <div class="col-md-4 col-md-offset-2 pdt15 pdr45 bdl1">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <span class="fw800">Log In</span>
                    </div>
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">                        
                        <input id="username" type="text" class="form-control create-input" name="username" value="{{ old('username') }}" required autofocus placeholder="Email address or Username">
                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control create-input" name="password" required placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif                        
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-default">
                            Login
                        </button>                      
                        <div class="checkbox">
                            <label class="fs12">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                            </label>
                        </div>
                        <a class="text-muted fs12 pd0" href="{{ url('/password/reset') }}">
                            Forgot Password?
                        </a>
                    </div>
                </form>
            </div>

            <div class="col-md-4 pdt15 pdl45 bdl1">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <span class="fw800">Create an Account</span>
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">   
                        <input id="name" type="text" class="form-control create-input" name="name" value="{{ old('name') }}" required placeholder="Name">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">                        
                        <input id="username" type="text" class="form-control create-input" name="username" value="{{ old('username') }}" required placeholder="Username">
                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif                        
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">                        
                        <input id="email" type="email" class="form-control create-input" name="email" value="{{ old('email') }}" required placeholder="Email address">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif                        
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">                        
                        <input id="password" type="password" class="form-control create-input" name="password" required placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif                        
                    </div>
                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control create-input" name="password_confirmation" required placeholder="Confirm password">
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-default">
                            Register
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
