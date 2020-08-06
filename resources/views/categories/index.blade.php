@extends('layouts.app')

@section('content')

	<div class="container">
		{{-- header start --}}
		<div class="row">
			<div class="col-12">
				<h1>Categories</h1>
			</div>
		</div>
         {{-- end hearder --}}


         {{-- category list start --}}

		<div class="row">

			{{-- card start --}}
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">
							__category_name__
						</h4>
					</div>
 
					<div class="card-footer text-center">
						{{-- view --}}
						<a href="" class="btn btn-success btn-sm mx-2">View</a>
						{{-- edit --}}
						<a href="" class="btn btn-warning btn-sm mx-2">Edit</a>
						{{-- delete --}}
						<form action="" method="post" class="d-inline-block mx-2">
							@csrf
							@method('DELETE')
							<button class="btn btn-danger btn-sm">Delete</button>
						</form>
					</div>
				</div>
			</div>

			{{-- card end --}}
		</div>

		{{-- end category list --}}
	</div>

@endsection