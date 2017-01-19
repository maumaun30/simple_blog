@extends('layouts.app')

@section('content')
    <div class="container fs15 resp-mgt70">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <span class="fw800">Reset Password</span>
                    </div>
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">                    
                        <input id="email" type="email" class="form-control create-input" name="email" value="{{ $email or old('email') }}" required autofocus placeholder="Email address">
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
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <input id="password-confirm" type="password" class="form-control create-input" name="password_confirmation" required placeholder="Confirm password">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-default">
                            Reset Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
