@extends('layouts.app')

@section('title', $category->name . " -")

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-decoration-none" style="color:#7952b3;" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="text-decoration-none" style="color:#7952b3;" href="{{ route('categories.index') }}">Categories</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $category->name }}
                        </li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="display-5 mb-3" style="font-size: 2rem">
                            <i class="far fa-sticky-note me-1"></i>
                            Related Posts
                        </h3>
                        <table class="table table-hover table-sm">
                            <thead>
                            <tr>
                                <th>Post Name</th>
                                <th>Created At</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Post Name</td>
                                <td>Post Created At</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="far fa-eye me-2"></i>
                                        Show
                                    </a>
                                    <a href="#" class="btn btn-sm btn-success">
                                        <i class="far fa-pencil-alt me-2"></i>
                                        Edit
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <i class="far fa-trash me-2"></i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4 p-3" style="background-color: #e6d8ff">
                        <h3 class="display-5 mb-3" style="font-size: 2rem">
                            <i class="far fa-sitemap me-1"></i>
                            {{ $category->name }}
                        </h3>

                        <div>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-success">
                                    <i class="far fa-pencil-alt me-2"></i>
                                    Edit
                                </a>

                                <button class="btn btn-sm btn-danger" type="submit">
                                    <i class="far fa-trash me-2"></i>
                                    Delete
                                </button>
                            </form>
                        </div>

                        <div class="mt-2">

                            <p class="mb-0"> <i class="far fa-calendar me-1"></i>Created At:</p>
                            <small>{{ $category->created_at->toDayDateTimeString() }}</small>
                            <hr class="mt-0 mb-0">

                            <p class="mb-0">Related Total Posts:</p>
                            <small>Name</small>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
