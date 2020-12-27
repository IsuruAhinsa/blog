@extends('layouts.app')

@section('title', 'User Profile -')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col">

                @include('settings.partials.header')

            </div>

        </div>

        <div class="row py-5">
            <div class="col-md-4 border-end border-3 text-center d-flex align-items-center">

                <div>

                    @if(Auth::user()->image)
                        <img src="{{ asset('img/users/' . Auth::user()->image) }}" class="img-fluid rounded-circle img-thumbnail" width="175" alt="{{ Auth::user()->image }}">
                    @else
                        <img src="{{ asset('img/users/default.png') }}" class="img-fluid rounded-circle img-thumbnail" width="175" alt="user default image">
                    @endif


                    <h3 class="display-6" style="color: #7952b3">
                        {{ Auth::user()->full_name }}
                    </h3>
                    <p>
                        <i class="far fa-envelope me-2"></i>
                        {{ Auth::user()->email }}
                    </p>

                    <small class="text-secondary">
                        {!! Auth::user()->bio !!}
                    </small>

                </div>

            </div>
            <div class="col-md-8 ps-4 pe-4">

                <x-Alert></x-Alert>

                <h4 class="fw-lighter">
                    <i class="far fa-id-card-alt me-2 text-secondary"></i>
                    Basic Info
                </h4>

                <hr>

                <form class="row g-3" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">

                    @csrf

                    <div class="col-md-6">
                        <label for="first_name" class="form-label">First Name</label>
                        <input
                            type="text"
                            class="form-control @error('first_name') is-invalid @enderror"
                            id="first_name"
                            name="first_name"
                            placeholder="Enter First Name"
                            value="{{ Auth::user()->first_name }}"
                        >
                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <i class="far fa-exclamation-circle me-1"></i>
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input
                            type="text"
                            class="form-control @error('last_name') is-invalid @enderror"
                            id="last_name"
                            name="last_name"
                            placeholder="Enter Last Name"
                            value="{{ Auth::user()->last_name }}"
                        >
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <i class="far fa-exclamation-circle me-1"></i>
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <label for="email" class="form-label">Email Address</label>
                        <input
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            id="email"
                            name="email"
                            placeholder="Enter Email Address"
                            value="{{ Auth::user()->email }}"
                        >
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <i class="far fa-exclamation-circle me-1"></i>
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <label for="image" class="form-label">Image</label>
                        <input
                            class="form-control form-control-sm @error('image') is-invalid @enderror"
                            id="image"
                            type="file"
                            name="image"
                            aria-describedby="imageHelp"
                        >
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <i class="far fa-exclamation-circle me-1"></i>
                                {{ $message }}
                            </span>
                        @enderror
                        <div id="imageHelp" class="form-text">
                            User image dimensions must be 1:1 & allowed file types are JPEG,JPG,GIF,PNG only.
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="bio" class="form-label">Bio</label>
                        <textarea
                            name="bio"
                            id="bio"
                            class="form-control @error('bio') is-invalid @enderror"
                            cols="10"
                            rows="5"
                            placeholder="Type Something about you..."
                        >{{ Auth::user()->bio }}</textarea>
                        @error('bio')
                            <span class="invalid-feedback" role="alert">
                                <i class="far fa-exclamation-circle me-1"></i>
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="col-12 d-inline-flex justify-content-end gap-2">
                        <a href="{{ url('/') }}" class="btn btn-outline-primary">Cancel</a>
                        <button type="submit" class="btn btn-primary">
                            <i class="far fa-save me-2"></i>
                            Save
                        </button>
                    </div>

                </form>

                <h4 class="fw-lighter">
                    <i class="far fa-unlock-alt me-2 text-secondary"></i>
                    Security
                </h4>

                <hr>

                <form action="{{ route('update.password') }}" method="POST" class="row g-3">

                    @csrf

                    <div class="col-md-4">
                        <label for="current_password" class="form-label">Current Password</label>
                        <input
                            type="password"
                            class="form-control @error('current_password') is-invalid @enderror"
                            id="current_password"
                            name="current_password"
                            placeholder="Enter Current Password"
                        >
                        @error('current_password')
                            <span class="invalid-feedback" role="alert">
                                <i class="far fa-exclamation-circle me-1"></i>
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="password" class="form-label">New Password</label>
                        <input
                            type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            id="password"
                            name="password"
                            placeholder="Enter New Password"
                        >
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <i class="far fa-exclamation-circle me-1"></i>
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input
                            type="password"
                            class="form-control"
                            id="password_confirmation"
                            name="password_confirmation"
                            placeholder="Re-Enter New Password"
                        >
                    </div>

                    <div class="col-12 d-inline-flex justify-content-end gap-2">
                        <a href="{{ url('/') }}" class="btn btn-outline-primary">Cancel</a>
                        <button type="submit" class="btn btn-primary">
                            Change Password
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>

@endsection
