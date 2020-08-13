@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="text-center">
					All Transactions
				</h1>
			</div>
		</div>

		{{-- transactions section start --}}
		<div class="row">
			<div class="col-12">
				@include('transactions.partials.accordion')
			</div>
		</div>
		{{-- transactions section end --}}
	</div>
@endsection