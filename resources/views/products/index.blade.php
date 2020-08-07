@extends('layouts.app')

@section('content')
	<div class="container container-fluid">
		{{-- header start --}}
		<div class="row">
			<div class="col-12">
				<h1 class="text-center">
					Product Catalog
				</h1>
			</div>
		</div>
		{{-- header end --}}

		{{-- products section start --}}
		<div class="row">

			@foreach($products as $product)
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2 mx-auto">
					{{-- product card start --}}
					<div class="card">
						<img src="{{ $product->image }}" alt="" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">
								{{ $product->name}}
							</h5>
							<p class="card-text mb-0">
								&#8369; {{ number_format($product->price,2) }}
							</p>
							<p class="card-text mb-0">
								<span class="badge badge-info">category</span>
							</p>

							<form action="" method="post" class="my-2">
								@csrf
								<input type="number" name="quantity" id="" class="form-control form-control-sm" min="1" value="1">
								<button class="btn btn-sm btn-success w-100 mt-1">Add to Cart</button>
							</form>

							<a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-info w-100">View</a>
						</div>
						<div class="card-footer">
							<a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning w-100 mb-1"> Edit</a>
							<form action="{{ route('products.destroy', $product->id) }}" method="post">
								@csrf
								@method('DELETE')
								<button class="btn btn-sm btn-danger w-100">Delete</button>
							</form>
						</div>
					</div>
					{{-- product card end --}}
				</div>
			@endforeach
		</div>
		{{-- products section end --}}
	</div>
@endsection
