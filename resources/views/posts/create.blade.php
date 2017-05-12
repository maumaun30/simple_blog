@extends('layouts.app')

@section('content')
    <section class="resp-mgt70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                		{{ csrf_field() }}
                		<input type="text" name="title" class="form-control create-input mgb20" placeholder="Title">
                		<input type="text" name="subtitle" class="form-control create-input mgb20" placeholder="Sub Title">
                		<textarea name="body" class="form-control create-input mgb20" placeholder="Content"></textarea>
                        <label class="fs14 mgt20">Cover Photo</label>
                		<input type="file" name="image" class="form-control create-input mgb20">
                		<button type="submit" class="btn btn-default">Post</button>
                	</form>
                </div>
            </div>
        </div>
    </section>
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