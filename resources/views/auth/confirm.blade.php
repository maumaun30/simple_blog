@extends('layouts.app')

@section('content')
    <div class="container fs15">
        <div class="row mgt70">
            <div class="col-md-4 col-md-offset-4">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <span class="fw800">Resend Email Verification Link</span>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control create-input" name="email" value="{{ old('email') }}" required placeholder="Email address">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-default">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
