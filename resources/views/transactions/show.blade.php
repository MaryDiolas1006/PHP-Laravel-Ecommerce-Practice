@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-12">
			<h1 class="text-center">View Transaction</h1>
		</div>
	</div>

	{{-- transaction section start --}}
	<div class="row">
		<div class="col-12">
			@include('transactions.partials.summary')
		</div>
	</div>
	@include('transactions.partials.products-table')
	{{-- transaction section end --}}
</div>
@endsection
