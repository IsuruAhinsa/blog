@extends('layouts.app')

@section('title', 'Edit Post -')

@section('content')

    <div class="container">

        <div class="row">

            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a class="text-decoration-none" style="color:#7952b3;" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="text-decoration-none" style="color:#7952b3;" href="#">Posts</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Edit Post
                    </li>
                </ol>
            </nav>
            <h3 class="display-5">
                <i class="far fa-sticky-note me-1"></i>
                Edit Post
            </h3>

        </div>


        <form action="#" class="py-5">

            <div class="row">

                <div class="col-md-6">

                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Post Title</label>
                        <input
                            type="text"
                            name="title"
                            id="title"
                            class="form-control"
                            placeholder="Enter Post Title"
                        >
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input
                            type="text"
                            name="slug"
                            id="slug"
                            class="form-control"
                            placeholder="Enter Slug"
                        >
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input
                            class="form-control form-control-sm"
                            id="image"
                            type="file"
                            name="image"
                        >
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Select Category</label>
                        <select class="form-select" id="category" name="category">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="mb-3">
                        <label for="body" class="form-label">Post Body</label>
                        <textarea
                            name="body"
                            id="body"
                            class="form-control"
                            cols="10"
                            rows="10"
                            placeholder="Type Something..."
                        ></textarea>
                    </div>

                    <button class="btn btn-outline-primary float-end" type="submit">Update Post</button>

                </div>

            </div>

        </form>

    </div>

@endsection
