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
            <a href="" class="text-reset"><u>Detail</u></a>
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
                <div class="flex mb-3">
                    <span><b>Name:</b></span>
                    <span>{{ $category->name }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection