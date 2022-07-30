@extends('layouts.app')
@section('content')
<!-- Heading -->
<div class="p-5 bg-light mb-4">
    <h1 class="">Categories</h1>
    <!-- Breadcrumb -->
    <nav class="d-flex">
        <h6 class="mb-0">
            <a href="" class="text-reset">Home</a>
            <span>/</span>
            <a href="" class="text-reset">Categories</a>
            <span>/</span>
            <a href="" class="text-reset"><u>Create</u></a>
        </h6>
    </nav>
    <!-- Breadcrumb -->
</div>
<!-- Heading -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
            </div>
            <div class="card p-5 shadow-none border">
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="" class="form-label"><b>Category Name</b></label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Category Name" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mt-5">
                            <input type="submit" value="Create" class="btn btn-primary">
                            <input type="reset" value="Reset" class="btn btn-secondary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection