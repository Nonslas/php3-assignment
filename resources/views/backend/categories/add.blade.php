@extends('backend.layouts.app');
@section('content')

<div class="row">
	<div class="col-6 mx-auto">
		<h1 style="font-size: x-large;">Add cateogry</h1>
		<form method="POST">
			@csrf
			<div class="form-group">
				<label>Category name</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>
					<input type="checkbox" name="show">
					Show/hidden
				</label>
			</div>
			<div class="d-flex justify-content-end">
				<button class="btn btn-outline-secondary">Cancle</button>
				<button class="ml-2 btn btn-outline-primary">Add</button>
			</div>
		</form>
	</div>
</div>
@endsection