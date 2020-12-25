@extends('layouts.app')

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
                    <img src="{{ asset('img/about.jpg') }}" class="img-fluid rounded-circle img-thumbnail" width="175" alt="">

                    <h3 class="display-6" style="color: #7952b3">
                        {{ Auth::user()->full_name }}
                    </h3>
                    <p>
                        <i class="far fa-envelope me-2"></i>
                        isurujayawickramat@gmail.com
                    </p>

                    <small class="text-secondary">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque, ducimus esse in nisi non nulla, obcaecati quisquam, recusandae repellendus sapiente veritatis voluptatem voluptatibus. Aliquid blanditiis esse fugit iure sit?
                    </small>

                </div>

            </div>
            <div class="col-md-8 ps-4 pe-4">

                <h4 class="fw-lighter">
                    <i class="far fa-id-card-alt me-2 text-secondary"></i>
                    Basic Info
                </h4>

                <hr>

                <form class="row g-3" method="POST" action="#">

                    @csrf

                    <div class="col-md-6">
                        <label for="first_name" class="form-label">First Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="first_name"
                            placeholder="Enter First Name"
                        >
                    </div>

                    <div class="col-md-6">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="last_name"
                            placeholder="Enter Last Name"
                        >
                    </div>

                    <div class="col-md-12">
                        <label for="email" class="form-label">Email Address</label>
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            placeholder="Enter Email Address"
                        >
                    </div>

                    <div class="col-md-12">
                        <label for="image" class="form-label">Image</label>
                        <input
                            class="form-control form-control-sm"
                            id="image"
                            type="file"
                            name="image"
                        >
                    </div>

                    <div class="col-md-12">
                        <label for="bio" class="form-label">Bio</label>
                        <textarea
                            name="bio"
                            id="bio"
                            class="form-control"
                            cols="10"
                            rows="5"
                            placeholder="Type Something about you..."
                        ></textarea>
                    </div>

                    <div class="col-12 d-inline-flex justify-content-end gap-2">
                        <a href="#" class="btn btn-outline-primary">Cancel</a>
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

                <form action="#" method="POST" class="row g-3">

                    <div class="col-md-4">
                        <label for="current_password" class="form-label">Current Password</label>
                        <input
                            type="password"
                            class="form-control"
                            id="current_password"
                            placeholder="Enter Current Password"
                        >
                    </div>

                    <div class="col-md-4">
                        <label for="password" class="form-label">New Password</label>
                        <input
                            type="password"
                            class="form-control"
                            id="password"
                            placeholder="Enter New Password"
                        >
                    </div>

                    <div class="col-md-4">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input
                            type="password"
                            class="form-control"
                            id="password_confirmation"
                            placeholder="Re-Enter New Password"
                        >
                    </div>

                    <div class="col-12 d-inline-flex justify-content-end gap-2">
                        <a href="#" class="btn btn-outline-primary">Cancel</a>
                        <button type="submit" class="btn btn-primary">
                            Change Password
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>

@endsection
