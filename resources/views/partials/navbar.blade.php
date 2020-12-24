<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #7952b3">

    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name') }}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="far fa-angle-down"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" href="#">News</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Sports</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Health</a>
                </li>

            </ul>

            <div class="ms-auto">

                @guest
                    <a class="btn btn-sm btn-outline-light me-2" href="{{ route('login') }}">
                        <i class="far fa-sign-in me-2"></i>
                        {{ __('Login') }}
                    </a>

                    @if (Route::has('register'))
                        <a class="btn btn-sm btn-outline-warning" href="{{ route('register') }}">
                            <i class="far fa-user-alt me-2"></i>
                            {{ __('Register') }}
                        </a>
                    @endif

                @else

                    <div class="dropdown">

                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </button>

                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">

                            <li>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </li>

                            <li><a class="dropdown-item" href="#">Another action</a></li>

                            <li><a class="dropdown-item" href="#">Something else here</a></li>

                        </ul>

                    </div>

                @endguest

            </div>

        </div>

    </div>

</nav>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

    <div class="container">

        <form class="me-auto d-flex">
            <input class="form-control me-2" type="search" placeholder="Search blog.." aria-label="Search">
        </form>

<!--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent2">

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>

        </div>-->
    </div>

</nav>
