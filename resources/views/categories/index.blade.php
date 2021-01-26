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
                            {{ request()->status == 'deleted' ? 'Deleted Categories' : 'Categories' }}
                        </li>
                    </ol>
                </nav>

                <div class="d-flex justify-content-between align-items-baseline">
                    <h3 class="display-5 mb-3">
                        <i class="far fa-sitemap me-1"></i>
                        {{ request()->status == 'deleted' ? 'Deleted Categories' : 'Categories' }}
                    </h3>

                    <div>
                        @if(request()->status == 'deleted')
                            <a href="{{ route('categories.index') }}" class="btn btn-sm btn-outline-primary">
                                <i class="far fa-sitemap me-2"></i>
                                Show Current Categories
                            </a>
                        @else
                            <a href="{{ route('categories.index', ['status' => 'deleted']) }}" class="btn btn-sm btn-outline-primary">
                                <i class="far fa-recycle me-2"></i>
                                Show Deleted Categories
                            </a>
                        @endif
                        <a href="{{ route('categories.create') }}" class="btn btn-sm btn-outline-primary">
                            <i class="far fa-plus me-2"></i>
                            Create Category
                        </a>
                    </div>
                </div>

                <div class="py-5">

                    <x-alert></x-alert>

                    <table class="table table-hover table-sm">
                        <thead>
                        <tr>
                            <th>Category Name</th>
                            <th>Created At</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->created_at->toDayDateTimeString() }}</td>
                                <td class="text-center">
                                    @if(request()->status == 'deleted')

                                        <a href="{{ route('categories.restore', $category->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fas fa-undo mr-2"></i>
                                            Restore
                                        </a>

                                        <a href="{{ route('categories.fdelete', $category->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this category permanently?')">
                                            <i class="fas fa-trash mr-2"></i>
                                            Permanently Delete
                                        </a>

                                    @else

                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-primary">
                                                <i class="far fa-eye me-2"></i>
                                                Show
                                            </a>
                                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-success">
                                                <i class="far fa-pencil-alt me-2"></i>
                                                Edit
                                            </a>

                                            <button class="btn btn-sm btn-danger" type="submit">
                                                <i class="far fa-trash me-2"></i>
                                                Delete
                                            </button>
                                        </form>

                                    @endif
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
