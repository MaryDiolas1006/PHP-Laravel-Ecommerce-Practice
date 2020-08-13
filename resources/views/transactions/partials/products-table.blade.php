<div class="row">
	<div class="col-12">
		{{-- table start --}}
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Quantity</th>
						<th>Price</th>
						<th>Subtotal</th>
					</tr>
				</thead>
				<tbody>

					@foreach($transaction->products as $product)
					{{-- product row start --}}
					<tr>
						<td>{{$product->name}}</td>
						<td>{{$product->pivot->quantity}}</td>
						<td>&#8369; {{number_format($product->pivot->price,2)}}</td>
						<td>&#8369; {{number_format($product->pivot->subtotal,2)}}</td>
					</tr>
					{{-- product row end --}}
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th colspan="3">Total:</th>
						<td>&#8369; {{number_format($transaction->total,2)}}</td>
					</tr>
				</tfoot>
			</table>
		</div>
		{{-- table end --}}
	</div>
</div>
