@extends('layouts.app')

@section('header')
    <header class="intro-header" style="background-image: url('/img/home-bg.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>Man must explore, and this is exploration at its greatest</h1>
                        <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
                        <span class="meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            	<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            		{{ csrf_field() }}
            		<input type="text" name="title" class="form-control create-input mgb20" placeholder="Title">
            		<input type="text" name="subtitle" class="form-control create-input mgb20" placeholder="Sub Title">
            		<textarea name="body" class="form-control create-input mgb20" placeholder="Content"></textarea>
            		<input type="file" name="image" class="form-control create-input mgb20">
            		<button type="submit" class="btn btn-default">Post</button>
            	</form>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
      $('textarea').ckeditor({
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
      });
    </script>
@stop