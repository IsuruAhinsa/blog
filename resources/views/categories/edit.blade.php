@extends('layouts.app')

@section('title', 'Edit ' . $category->name . ' Category -')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-decoration-none" style="color:#7952b3;" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="text-decoration-none" style="color:#7952b3;" href="{{ route('categories.index') }}">Categories</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Edit {{ $category->name }} Category
                        </li>
                    </ol>
                </nav>
                <h3 class="display-5">
                    <i class="far fa-sitemap me-1"></i>
                    Edit Category
                </h3>

                <form action="{{ route('categories.update', $category->id) }}" method="POST" class="py-5">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name</label>
                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="form-control @error('name') is-invalid @enderror"
                            placeholder="Enter Category Name"
                            value="{{ $category->name }}"
                        >
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <i class="far fa-exclamation-circle me-1"></i>
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <button class="btn btn-outline-primary float-end" type="submit">Update Category</button>

                </form>

            </div>
        </div>
    </div>

@endsection
