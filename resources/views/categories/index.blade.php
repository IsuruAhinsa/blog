@extends('layouts.app')

@section('title', 'Categories -')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-decoration-none" style="color:#7952b3;" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Categories
                        </li>
                    </ol>
                </nav>

                <div class="d-flex justify-content-between align-items-baseline">
                    <h3 class="display-5 mb-3">
                        <i class="far fa-sitemap me-1"></i>
                        Categories
                    </h3>

                    <div>
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="far fa-recycle me-2"></i>
                            Show Deleted Categories
                        </a>
                    </div>
                </div>

                <div class="py-5">
                    <table class="table table-hover table-sm">
                        <thead>
                        <tr>
                            <th>Category Name</th>
                            <th>Created At</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Health</td>
                            <td>2020-12-11</td>
                            <td class="text-center">
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

            </div>
        </div>
    </div>

@endsection
