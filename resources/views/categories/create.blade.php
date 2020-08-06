@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="text-center">
					Create New Category
				</h1>
			</div>
		</div>


		{{-- start form section --}}


			<div class="row">
				<div class="col-12 col-sm-6 mx-auto">
					<form action="{{route('categories.store')}}" method="post">
						@csrf
						<label for="name">Category name:</label>
						<input type="text" name="name" id="name" class="form-control form-control-sm">
						<button class="btn btn-sm btn-primary mt-2">Create Category</button>
					</form>
				</div>
			</div>
		{{-- end form section --}}
	</div>

@endsection