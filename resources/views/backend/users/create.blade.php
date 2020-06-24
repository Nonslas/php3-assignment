@extends('backend.layouts.app');
@section('content')

<div class="row">
	<div class="col">
		<h1 style="font-size: x-large;">Add user</h1>
		<form method="POST" action="{{ route('admin.users.store') }}">
			@csrf
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control">
			</div>
			<div class="d-flex justify-content-end">
				<button class="btn btn-outline-secondary">Cancle</button>
				<button class="ml-2 btn btn-outline-primary">Add</button>
			</div>
		</form>
	</div>
</div>
@endsection