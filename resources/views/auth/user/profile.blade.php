@extends('layouts.app')

@section('content')
	<div class="container resp-mgt70">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<div class="text-center">
					<div class="profpic">
						<img src="{{ asset('/img/uploads/'.$user->image) }}" class="img-responsive img-thumbnail">					
					</div>

					<div class="dp-bl">
						<span class="fw800 dp-il" id="name">
							{{ $user->name }} 
						</span>
						<div class="dp0 dp-il" id="nameBtn">
							<span class="fa fa-pencil"></span>
						</div>
						<input type="text" name="name" class="form-control create-input wd200 mg-auto dp0" value="{{ $user->name }}" id="nameInp" data-token="{{ csrf_token() }}" data-url="{{ route('name.update',$user->id) }}">
					</div>

					<span class="dp-bl fs15 mgt20" id="title">
						@if(isset($user->title))
							{{ $user->title }} 
						@else
							No title. 
						@endif
						<span class="fa fa-pencil"></span>
					</span>
					<input type="text" name="title" class="form-control create-input wd200 mg-auto dp0" value="{{ $user->title }}" id="titleInp" data-token="{{ csrf_token() }}" data-url="{{ route('title.update',$user->id) }}">

					<span class="dp-bl fs15 mgt20" id="description">
						@if(isset($user->description))
							{{ $user->description }} 
						@else
							No description. 
						@endif
						<span class="fa fa-pencil"></span>
					</span>
					<input type="text" name="description" class="form-control create-input wd200 mg-auto dp0" value="{{ $user->description }}" id="titleDesc" data-token="{{ csrf_token() }}" data-url="{{ route('description.update',$user->id) }}">

				</div>
			</div>
		</div>
	</div>
@stop

@section('scripts')
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$('#name').on('mouseenter', function(){
				$('#nameBtn').show();
			}).on('mouseleave', function(){
				$('#nameBtn').hide();
			});

			$("#nameInp").keypress(function(event) {
				var value = $(this).val();
				var token = $(this).data('token');
				var url = $(this).data('url');
			    if (event.which == 13) {
			        event.preventDefault();
			        $.ajax({
						type: "patch",
						url: url,
						dataType: 'json',
						data: { name: value, _token: token }
					}).done(function(){
						$(this).val(value);
						$('#name').text(value);
					});
			    }
			});

			$("#titleInp").keypress(function(event) {
				var value = $(this).val();
				var token = $(this).data('token');
				var url = $(this).data('url');
			    if (event.which == 13) {
			        event.preventDefault();
			        $.ajax({
						type: "patch",
						url: url,
						dataType: 'json',
						data: { title: value, _token: token }
					}).done(function(){
						$(this).val(value);
						$('#title').text(value);
					});
			    }
			});

			$("#titleDesc").keypress(function(event) {
				var value = $(this).val();
				var token = $(this).data('token');
				var url = $(this).data('url');
			    if (event.which == 13) {
			        event.preventDefault();
			        $.ajax({
						type: "patch",
						url: url,
						dataType: 'json',
						data: { description: value, _token: token }
					}).done(function(){
						$(this).val(value);
						$('#description').text(value);
					});
			    }
			});
		});
	</script>
@stop