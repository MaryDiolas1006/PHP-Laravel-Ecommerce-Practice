@extends('layouts.app')

@section('content')
	<div class="container">

		@includeWhen(Session::has('message'), 'partials.alert')

		<div class="row">
			<div class="col-12 col-md-4">
				<img src="{{ $product->image }}" alt="" class="w-100">
			</div>
			<div class="col-12 col-md-8">
				<h1>{{ $product->name }}</h1>
                 
                 {{-- description start --}}
				<div class="row">
					<div class="col-2">Description</div>
					<div class="col">{{ $product->description }}</div>
				</div>

				{{-- end description --}}

				{{-- category start --}}

				<div class="row">
					<div class="col-2">Category</div>
					<div class="col"><span class="badge badge-info">
						{{ $product->category->name }}
					</span></div>
				</div>


				{{-- category end --}}


				{{-- start price --}}
				<div class="row my-2">
					<div class="col-2">Price:</div>
					<div class="col"><h3>&#8369;{{ number_format($product->price, 2) }}</h3></div>
				</div>
				{{-- end price --}}
                 @cannot('isAdmin')
				{{-- add to cart start --}}
				<div class="row my-2">
					<div class="col col-sm-6 col-md-3">
						@include('products.partials.add-to-cart')
					</div>
				</div>

				{{-- add to cart end --}}
				@endcannot

				@can('isAdmin')

				{{-- admin btns start --}}

				<div class="row">
					

				{{-- edit start --}}

                 <div class="col col-md-4">
                 	@include('products.partials.edit-btn')
                 </div>

				{{-- edit end --}}



				{{-- delete start --}}
                 <div class="col col-md-4">
                 	@include('products.partials.delete-form')
                 </div>
				{{-- delete end --}}
				</div>
				{{-- admin btns end --}}
				@endcan
			</div>
		</div>
	</div>

@endsection