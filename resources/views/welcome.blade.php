@extends('layouts.app')

@section('header')
    <header class="intro-header" style="background-image: url('/img/home-bg.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
    <!-- Main Content -->
    <div class="container">

        @foreach($posts as $post)
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <a href="{{ route('posts.show',$post->id) }}">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ asset('/img/uploads/thumbnails' . $post->image) }}" alt="{{ $post->image }}" class="img-responsive">
                    </div>
                    <div class="col-md-9">
                        <span class="dp-bl fs30 fw800">
                            {{ $post->title }}
                        </span>
                        <span class="dp-bl fs20 mgv10">
                            {{ $post->subtitle }}
                        </span>
                    </div>
                </div>
                </a>
                <span class="dp-bl fs15 text-muted pull-right">Posted by <a href="#">{{ $post->postUser->name }}</a> on {{ date_format($post->created_at, 'm d, Y') }}</span>     
                <hr>                    
            </div>
        </div>
        @endforeach

        {{ $posts->links() }}

    </div>
@stop