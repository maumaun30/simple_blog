@extends('layouts.app')

@section('content')
    <div class="container fs15">
        <div class="row mgt70">
            <div class="col-md-6">
                <span>Log In</span>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        
                            <input id="email" type="email" class="form-control create-input" name="email" value="{{ old('email') }}" required autofocus placeholder="Email address or Username">

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
                        
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                                </label>
                            </div>
                        
                    </div>

                    <div class="form-group">
                        
                            <button type="submit" class="btn btn-default">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                Forgot Your Password?
                            </a>
                        
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <span>Create an Account</span>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                         
                            <input id="name" type="text" class="form-control create-input" name="name" value="{{ old('name') }}" required placeholder="Name">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
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

                    <div class="form-group">
                        
                            <button type="submit" class="btn btn-default">
                                Register
                            </button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
