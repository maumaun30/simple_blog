@extends('layouts.app')

@section('content')

    @include('partials.header')

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        	<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
        		{{ csrf_field() }}
        		<input type="text" name="title" class="form-control create-input mgb10" placeholder="Title">
        		<input type="text" name="subtitle" class="form-control create-input mgb10" placeholder="Sub Title">
        		<textarea name="body" class="form-control create-input mgb10" placeholder="Content"></textarea>
        		<input type="file" name="image" class="form-control create-input mgb10">
        		<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        		<button type="submit" class="btn">Post</button>
        	</form>
        </div>
    </div>
</div>
@stop