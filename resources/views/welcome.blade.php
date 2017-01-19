@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <div class="container resp-mgt70">

        @if($posts->isEmpty())
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 pdv30 bdt1 text-center">
                    <img src="{{ asset('/img/emoticon.gif') }}" class="img-responsive ht100 img-rounded mg-auto">
                    <br>
                    <span>No available blogs yet. Why not <a href="{{ route('posts.create') }}">create</a> one?</span>
                </div>
            </div>
        @else
            @foreach($posts as $post)
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 pdv30 bdt1">
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
                    <span class="dp-bl fs15 text-muted pull-right">Posted by <a href="#">{{ $post->postUser->name }}</a> on {{ date_format($post->created_at, 'F d, Y') }}</span>
                </div>
            </div>
            @endforeach

            {{ $posts->links() }}
        @endif

    </div>
@stop