@extends('layouts.app')

@section('content')

	<div class="container">
		{{-- header start --}}
		<div class="row">
			<div class="col-12">
				<h1 class="text-center">Categories</h1>
			</div>
		</div>
         {{-- end hearder --}}

         {{-- alert message --}}
         @includeWhen(Session::has('message'), 'partials.alert')


         {{-- category list start --}}

		<div class="row">

			@foreach($categories as $category)

			{{-- card start --}}
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				@include('categories.partials.card')
			</div>

			@endforeach

			{{-- card end --}}
		</div>

		{{-- end category list --}}
	</div>

@endsection