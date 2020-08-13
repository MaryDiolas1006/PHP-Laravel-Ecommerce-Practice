<form action="{{route('transactions.update', $transaction->id)}}" method="post" class=" border p-3">
	@csrf
	@method("PUT")
	<label for="status_id">Edit:</label>
	<select name="status_id" id="status_id" class="form-control form-control-sm">
		@foreach($statuses as $status)
		<option value="{{$status->id}}">{{$status->name}}</option>
		@endforeach
	</select>
	<button class="btn btn-sm btn-outline-primary my-1">Edit Status</button>
</form>