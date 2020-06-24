@extends('backend.layouts.app')
@section('content')

<form>
	<div class="input-group mb-3">
		<input type="text" class="form-control" name="q" value="{{ $q }}">
		<div class="input-group-append">
			<button class="btn btn-outline-primary">Search</button>
		</div>
	</div>
</form>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Image</th>
			<th>Price</th>
			<th>Star</th>
			<th>
				<a class="btn btn-outline-primary" href="{{ route('admin.products.create') }}">Add product</a>
			</th>
		</tr>
	</thead>
	<tbody>
	@foreach ($products as $product)
		<tr>
			<td>{{ $product->id }}</td>
			<td>{{ $product->name }}</td>
			<td><img class="img-thumbnail" style="height: 100px;" src="{{ $product->image }}"></td>
			<td>{{ $product->price }}</td>
			<td>{{ $product->star }}</td>
			<td>
				<a class="btn btn-outline-primary" href="{{ route('admin.products.edit', $product->id) }}">Edit</a>
				<a class="btn btn-outline-danger" onclick="_confirm(this)" data-href="{{ route('admin.products.delete', $product->id) }}" href="javascript:;">Delete</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>


{{ $products->withQueryString()->links() }}

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
	const _confirm = element => {
		swal({
		  title: "Are you sure?",
		  text: "Delete product?",
		  icon: "warning",
		  buttons: true
		}).then(willDelete => {
			if (willDelete) document.location.href = element.dataset.href;
		});
	}

	const showAddModal = () => {
		$('#addModal').modal('show');
	}
</script>

@endsection