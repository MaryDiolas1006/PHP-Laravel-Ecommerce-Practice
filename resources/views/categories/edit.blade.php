@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-12">
			<h1 class="text-center">
				Edit Category
			</h1>
		</div>
	</div>


	<div class="row">
		<div class="col-12 col-md-6 mx-auto">

			{{-- start form --}}

			<form action="{{ route('categories.update', $category->id) }}" method="post">
				@csrf
				@method('PUT')

				<label for="name">Category name:</label>
				<input type="text" name="name" id="name" class="form-control form-control-sm" value="{{ $category->name }}">

				<button class="btn btn-sm btn-warning mt-2">Edit</button>
				
			</form>

			{{-- end form --}}
			
		</div>
	</div>
</div>


@endsection