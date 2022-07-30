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
            <a href="" class="text-reset"><u>Detail</u></a>
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
                <div class="d-flex">
                    @if($product->images()->exists())
                    @foreach ($product->images as $image)
                        <img src="{{ Storage::url($image->path) }}"  class="m-3" width="100" alt="Product Image">
                    @endforeach
                    @endif
                </div>
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td>{{ $product->name }}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>{{ $product->price }}</td>
                    </tr>
                    <tr>
                        <th>Categories</th>
                        <td>
                            @foreach ($product->categories as $category)
                                <span class="badge badge-info">{{ $category->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ $product->description }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection