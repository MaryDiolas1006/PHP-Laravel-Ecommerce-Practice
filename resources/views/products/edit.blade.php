@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="text-center">
					Edit Product
				</h1>
			</div>
		</div>

		{{-- start edit form --}}
		<div class="row">
			<div class="col-12 col-md-8 col-lg-10 mx-auto">
				{{-- start form --}}
				
				<form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')

					{{-- name --}}

					@include('products.partials.form-group', [
                    	
                    	'name' => 'name',
                    	'type' => 'text',
                    	'classes' => ['form-control', 'form-control-sm']

						])

					{{-- price --}}

					@include('products.partials.form-group', [
                    	
                    	'name' => 'price',
                    	'type' => 'text',
                    	'classes' => ['form-control', 'form-control-sm']

						])

					{{-- image --}}

					@include('products.partials.form-group', [
                    	
                    	'name' => 'image',
                    	'type' => 'file',
                    	'classes' => ['form-control-file', 'form-control-sm']

						])

					{{-- category_id --}}
					<label for="category_id">Product category</label>
					@error('category_id')

					<small class="d-block invalid-feedback">
						<strong>{{$message}}</strong>
					</small>

					@enderror

					<select name="category_id" id="category_id" class="form-control form-control-sm">
						@foreach($categories as $category)
						<option value="{{ $category->id }}">{{ $category->name }}</option>
						@endforeach
					</select>

					{{-- description --}}

					<label for="description" class="mt-3">Product Description</label>

					@error('description')
					<small class="d-block invalid-feedback">
						<strong>{{$message}}</strong>
					</small>

					@enderror
					<textarea name="description" id="description" cols="30" rows="10" class="form-control form-control-sm"></textarea>

					<button class="btn btn-sm btn-warning mt-3">Edit Product</button>
					
				</form>

				{{-- end form --}}
			</div>
		</div>
		{{-- end edit form --}}
	</div>
@endsection