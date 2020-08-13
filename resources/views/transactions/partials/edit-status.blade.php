<form action="" method="post" class=" border p-3">
	@csrf
	@method("PUT")
	<label for="status_id">Edit:</label>
	<select name="status_id" id="status_id" class="form-control form-control-sm">
		<option value="{{-- {{$product->id}} --}}">{{-- {{$product->name}} --}}</option>
	</select>
	<button class="btn btn-sm btn-outline-primary my-1">Edit Status</button>
</form>