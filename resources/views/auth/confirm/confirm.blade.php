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
                <form class="form-horizontal text-center" role="form" method="get" action="{{ route('send/confirm/email',encrypt(Auth::id())) }}">
                    <div class="form-group">
                        <span class="fw800">Resend Email Verification Link</span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">
                            Resend
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
