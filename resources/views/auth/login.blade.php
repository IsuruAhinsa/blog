@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row d-flex justify-content-center">

            <div class="col-md-6" style="padding-top: 5rem; padding-bottom: 5rem;">

                <h3 class="text-center display-5" style="color:#7952b3;">{{ __('Login') }}</h3>

                <form method="POST" action="{{ route('login') }}">

                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                        <input
                            id="email"
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Enter email"
                            required
                            autocomplete="email"
                            autofocus
                        >
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input
                            id="password"
                            type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            name="password"
                            placeholder="Enter Password"
                            required
                            autocomplete="current-password"
                        >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3 form-check">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            name="remember"
                            id="remember" {{ old('remember') ? 'checked' : '' }}
                        >
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                    </div>

                    @if (Route::has('password.request'))
                        <a class="text-decoration-none float-end py-2" href="{{ route('password.request') }}" style="color: #7952b3">
                            <i class="far fa-question-circle me-2"></i>
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                </form>

            </div>

        </div>

    </div>

@endsection
