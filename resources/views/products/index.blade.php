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
								<span class="badge badge-info">
								{{ $product->category->name }}
								</span>
							</p>

							@include('products.partials.add-to-cart')
							
							<a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-info w-100">View</a>
						</div>
						<div class="card-footer">
							
							@include('products.partials.edit-btn')



							@include('products.partials.delete-form')


						</div>
					</div>
					{{-- product card end --}}
				</div>
			@endforeach
		</div>
		{{-- products section end --}}
	</div>
@endsection
