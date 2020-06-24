@extends('backend.layouts.app')
@section('content')

<form action="{{ route('admin.products.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $product->name }}">
        </div>

        <div class="form-group">
            <label for="name">Category</label>
            <select name="category_id" id="category" class="form-control">
            	@foreach ($categories as $category):
            	<option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
            		{{ $category->name }}
            	</option>
            	@endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" id="price" name="price" class="form-control" value="{{ $product->price }}">
        </div>

        <div class="form-group">
            <label for="star">Star</label>
            <input type="text" id="star" name="star" class="form-control" value="{{ $product->star }}">
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

    <button class="btn btn-outline-primary">Save</button>

</form>

@endsection