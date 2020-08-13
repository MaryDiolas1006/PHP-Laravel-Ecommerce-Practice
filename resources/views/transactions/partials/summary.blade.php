{{-- table start --}}
<div class="table-responsive">
	<table class="table table-hover">
		{{-- transacation code --}}
		<tr>
			<td>Transaction Code</td>
			<td>{{$transaction->transaction_code}}</td>
		</tr>
		{{-- transaction code end --}}
		
		{{-- Customer name start --}}
		<tr>
			<td>Customer</td>
			<td>{{$transaction->user->name}}</td>
		</tr>
		{{-- Customer name end --}}

		{{-- Date start --}}
		<tr>
			<td>Date</td>
			<td>{{date('M d, Y',strtotime($transaction->created_at))}}</td>
		</tr>
		{{-- Date end --}}

		{{-- Payment mode start --}}
		<tr>
			<td>Mode of Payment</td>
			<td>{{$transaction->paymentMode->name}}</td>
		</tr>
		{{-- Payment mode end --}}

		{{-- Status start --}}
		<tr>
			<td>Status</td>
			<td>
				{{$transaction->Status->name}}
				@include('transactions.partials.edit-status')
			</td>
		</tr>
		{{-- Status end --}}

		{{-- Total start --}}
		<tr>
			<td>Total</td>
			<td>{{$transaction->total}}</td>
		</tr>
		{{-- Total end --}}
		

	</table>
</div>
			{{-- table end --}}