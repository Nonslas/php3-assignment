@extends('backend.layouts.app');
@section('content')

<div class="row">
	<div class="col-6 mx-auto">
		<h1 style="font-size: x-large;">Add category</h1>
		<form method="POST">
			@csrf
			<div class="form-group">
				<label>Category name</label>
				<input type="text" name="name" class="form-control">
				@error('name')
				{{ $message }}
				@enderror
			</div>
			<div class="d-flex justify-content-end">
				<a href="{{ route('admin.categories.index') }}" class="btn btn-outline-secondary">Cancle</a>
				<button class="ml-2 btn btn-outline-primary">Add</button>
			</div>
		</form>
	</div>
</div>
@endsection