@extends('layouts.app')

@section('content')
	<div class="container resp-mgt70">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<div class="text-center">
					<div class="profpic">
						<img src="{{ asset('/img/uploads/default.jpg') }}" class="img-responsive img-thumbnail">					
					</div>
					<span class="fw800">{{ $user->name }}</span>
				</div>
			</div>
		</div>
	</div>
@stop