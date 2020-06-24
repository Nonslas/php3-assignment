@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-6 mx-auto">
		<form method="POST">
			@csrf
			<div class="form-group">
				<label>Ten</label>
				<input class="form-control" type="" name="name">
			</div>
			<div class="form-group">
				<label>MSSV</label>
				<input class="form-control" type="" name="code">
			</div>
			<div class="form-group">
				<label>Lop</label>
				<input class="form-control" type="" name="class">
			</div>
			<div class="form-group">
				<label>Ngay sinh</label>
				<input class="form-control" type="" name="birthday">
			</div>
			<div class="form-group">
				<label>Dia chi</label>
				<input class="form-control" type="" name="address">
			</div>

			<button class="btn btn-primary">Save</button>
		</form>
	</div>
</div>
@endsection