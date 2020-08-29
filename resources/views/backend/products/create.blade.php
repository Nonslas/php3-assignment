@extends('backend.layouts.app')
@section('content')

<form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control">
            @error('name')
                {{ $message }}
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Category</label>
            <select name="category_id" id="category" class="form-control" name="category_id">
                @foreach ($categories as $category):
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
            @error('category_id')
                {{ $message }}
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" id="price" name="price" class="form-control">
            @error('price')
                {{ $message }}
            @enderror
        </div>

        <div class="form-group">
            <label for="star">Star</label>
            <input type="text" id="star" name="star" class="form-control">
            @error('star')
                {{ $message }}
            @enderror
        </div>

    </div>

    <div class="col">
        <div class="form-group">
            <label for="exampleInputFile">Image</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
            </div>
        </div>
        @error('image')
            {{ $message }}
        @enderror
    </div>

</div> <!-- end .row -->

    <button class="btn btn-outline-primary">Add</button>

</form>

@endsection