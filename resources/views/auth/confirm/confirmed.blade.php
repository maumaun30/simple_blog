@extends('layouts.app')

@section('content')
    <div class="container fs15 resp-mgt70">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <span class="fs15 dp-bl">Your account has been successfully confirmed.</span>
                <a href="{{ route('home') }}">Click here to go back</a>
            </div>
        </div>
    </div>
@endsection
