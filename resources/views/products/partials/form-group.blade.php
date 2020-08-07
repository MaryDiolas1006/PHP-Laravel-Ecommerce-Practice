<div class="form-group">
	<label for="name">Product {{ $name }}:</label>
	<input 
	type="{{ $type }}" 
	name="{{ $name }}" 
	id="{{ $name }}" 
	class="

		@error($name) is-invalid @enderror

		@foreach($classes as $class)

			{{ $class }}

		@endforeach


	"
	autofocus>

	@error($name)

	<small class="d-block invalid-feedback">
		<strong>
			{{ $message }}
		</strong>

	</small>
	@enderror
</div>