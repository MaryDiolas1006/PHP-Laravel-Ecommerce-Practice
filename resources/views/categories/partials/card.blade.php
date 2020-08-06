<div class="card">
	<div class="card-body">
		<h4 class="card-title text-center">
			{{ $category->name }}
		</h4>
	</div>

	<div class="card-footer text-center">
		{{-- view --}}
		<a href="{{ route('categories.show', $category->id) }}" class="btn btn-success btn-sm mx-2">View</a>
		{{-- edit --}}
		<a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm mx-2">Edit</a>
		{{-- delete --}}
		<form action="{{ route('categories.destroy', $category->id) }}" method="post" class="d-inline-block mx-2">
			@csrf
			@method('DELETE')
			<button class="btn btn-danger btn-sm">Delete</button>
		</form>
	</div>
</div>