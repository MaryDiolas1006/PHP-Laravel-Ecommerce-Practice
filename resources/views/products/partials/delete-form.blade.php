<form action="{{ route('products.destroy', $product->id) }}" method="post">
	@csrf
	@method('DELETE')
	<button class="btn btn-sm btn-danger w-100">Delete</button>
</form>