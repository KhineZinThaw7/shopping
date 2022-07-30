@extends('layouts.app')
@section('content')
<!-- Heading -->
<div class="p-5 bg-light mb-4">
    <h1 class="">Products</h1>
    <!-- Breadcrumb -->
    <nav class="d-flex">
        <h6 class="mb-0">
            <a href="" class="text-reset">Home</a>
            <span>/</span>
            <a href="" class="text-reset">Products</a>
            <span>/</span>
            <a href="" class="text-reset"><u>Edit</u></a>
        </h6>
    </nav>
    <!-- Breadcrumb -->
</div>
<!-- Heading -->
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
            </div>
            <div class="card p-5 shadow-none border">
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="" class="form-label"><b>Image</b></label>
                        <input type="file" name="images[]" class="form-control" multiple>
                        @error('images')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        @foreach($errors->get('images.*') as $message)
                            <span class="text-danger">{{ $message[0] }}</span>
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"><b>Name</b></label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{ $product->name }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"><b>Price</b></label>
                        <input type="number" name="price" class="form-control" placeholder="Enter price" value="{{ $product->price }}">
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"><b>Categories</b></label>
                        <select name="categories[]" class="form-control" multiple>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" 
                                    @if($product->categories()->pluck('id')->contains($category->id)) selected @endif>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"><b>Description</b></label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Enter description">{{ $product->description }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mt-5">
                            <input type="submit" value="Update" class="btn btn-primary">
                            <input type="reset" value="Reset" class="btn btn-secondary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection