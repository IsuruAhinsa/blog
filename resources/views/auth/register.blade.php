@extends('layouts.app')

@section('title', 'Register -')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6" style="padding-top: 5rem; padding-bottom: 5rem;">
            <h3 class="text-center display-5" style="color:#7952b3;">{{ __('Register') }}</h3>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
                    <input
                        id="first_name"
                        type="text"
                        class="form-control @error('first_name') is-invalid @enderror"
                        name="first_name"
                        placeholder="Enter First Name"
                        value="{{ old('first_name') }}"
                        required
                        autocomplete="first_name"
                        autofocus
                    >
                    @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                    <input
                        id="last_name"
                        type="text"
                        class="form-control @error('last_name') is-invalid @enderror"
                        name="last_name"
                        placeholder="Enter Last Name"
                        value="{{ old('last_name') }}"
                        required
                        autocomplete="last_name"
                        autofocus
                    >
                    @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    <input
                        id="email"
                        type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        name="email"
                        placeholder="Enter email"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                    >
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                    <input
                        id="password"
                        type="password"
                        class="form-control @error('password') is-invalid @enderror"
                        placeholder="Enter Password"
                        name="password"
                        required
                        autocomplete="new-password"
                    >

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                    <input
                        id="password-confirm"
                        type="password"
                        class="form-control"
                        name="password_confirmation"
                        placeholder="Re-enter Password"
                        required
                        autocomplete="new-password"
                    >
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
