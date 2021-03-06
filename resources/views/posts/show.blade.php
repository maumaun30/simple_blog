@extends('layouts.app')

@section('header')
    <header class="intro-header" style="background-image: url('/img/uploads/{{ $post->image }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <span class="title-heading">{{ $post->title }}</span>
                        <span class="subheading mgb20">{{ $post->subtitle }}</span>
                        <span class="meta">Posted by <a href="#">{{ $post->user }}</a> on {{ date_format($post->created_at, 'F d, Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-overlay"></div>
    </header>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            	{!! $post->body !!}
            </div>
        </div>
    </div>
@stop