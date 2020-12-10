<footer class="container-fluid bg-light py-5 mt-auto">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md">
                <h2>{{ config('app.name') }}</h2>
                <small class="d-block mb-3 text-muted">© 2017-2020</small>
            </div>
            <div class="col-6 col-md">
                <h5>Categories</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li>
                        <a class="link-secondary text-decoration-none" href="{{ route('login') }}">
                            <i class="far fa-sign-in me-2"></i>
                            Login
                        </a>
                    </li>
                    <li>
                        <a class="link-secondary text-decoration-none" href="{{ route('register') }}">
                            <i class="far fa-user-alt me-2"></i>
                            Register
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <small class="text-secondary">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, aut deleniti dicta dignissimos dolores dolorum eum illum ipsa maxime nemo nesciunt nisi officia omnis optio quaerat, quas quis saepe temporibus.
                </small>
                <br><br>
                <a href="mailto::weblog@mail.com" class="text-decoration-none small text-secondary">
                    <i class="far fa-envelope me-2"></i>
                    weblog@mail.com
                </a>
            </div>
        </div>
    </div>
</footer>
