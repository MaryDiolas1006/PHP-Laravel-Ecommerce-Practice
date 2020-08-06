@extends('layouts.app')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-12">
			<h1 class="text-center">
				View Category
			</h1>
		</div>
	</div>

	{{-- alert message --}}

	@includeWhen(Session::has('message'), 'partials.alert')

	<div class="row">
		<div class="col-12 col-sm-6 col-md-8 mx-auto">
			@include('categories.partials.card', ['view' => false])
		</div>
	</div>
</div>


@endsection