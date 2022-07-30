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
            <a href="" class="text-reset"><u>List</u></a>
        </h6>
    </nav>
    <!-- Breadcrumb -->
</div>
<!-- Heading -->

<div class="container">
    <div class="row justify-content-center">
        @include('layouts._alert')
        <div class="col-8">
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('categories.create') }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="table-responsive">
                <table class="table align-middle table-bordered">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    
                                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info"><i class="far fa-eye"></i></a>
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning"><i class="far fa-edit"></i></a>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection