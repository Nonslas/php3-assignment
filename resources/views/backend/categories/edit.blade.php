@extends('backend.layouts.app')
@section('content')

<div class="row">
	<div class="col">
		<h1 style="font-size: x-large;">Edit category</h1>
		<form method="POST" action="{{ route('admin.categories.update', ['id' => $category->id]) }}">
			@csrf
			<div class="form-group">
				<label>Category name</label>
				<input type="text" name="name" class="form-control" value="{{ $category->name }}">
			</div>
			<div class="form-group">
				<label>
					<input type="checkbox" name="show">
					Show/hidden
				</label>
			</div>
			<div class="d-flex justify-content-end">
				<button class="btn btn-outline-secondary">Cancle</button>
				<button class="ml-2 btn btn-outline-primary">Save</button>
			</div>
		</form>
	</div>
</div>
@endsection