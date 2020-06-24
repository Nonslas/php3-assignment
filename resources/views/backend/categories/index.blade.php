@extends('backend.layouts.app')
@section('content')
<div class="card">
	<div class="card-body p-0">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>
						<a class="btn btn-outline-primary" href="{{ route('admin.categories.create') }}">Add</a>
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($categories as $category)
				<tr>
					<td>{{ $category->id }}</td>
					<td>{{ $category->name }}</td>
					<td>
						<a href="{{ route('admin.categories.edit', ['id' => $category->id]) }}" class="btn btn-sm btn-outline-primary">Edit</a>
						<a href="{{ route('admin.categories.delete', ['id' => $category->id]) }}" class="btn btn-sm btn-outline-danger">Remove</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="card-footer clearfix">
		{{ $categories->withQueryString()->links() }}
	</div>
</div>


@endsection