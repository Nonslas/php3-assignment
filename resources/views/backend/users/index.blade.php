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
						<a class="btn btn-outline-primary" href="{{ route('admin.users.create') }}">Add</a>
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->email }}</td>
					<td></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="card-footer clearfix">
		{{ $users->withQueryString()->links() }}
	</div>
</div>
@endsection