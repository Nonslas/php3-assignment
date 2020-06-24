@extends('backend.layouts.app')
@section('content')

<form action="{{ route('admin.products.store') }}" method="POST">

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
    </div>

    <div class="col">
        <div class="form-group">
            <label for="exampleInputFile">Image</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
            </div>
        </div>
    </div>
</div> <!-- end .row -->

</form>

@endsection