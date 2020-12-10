@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row d-flex justify-content-center">
            <div class="col-md-11">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/carousel/4.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/carousel/3.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/carousel/2.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/carousel/1.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Fourth slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <main class="py-5">
            <h3>Recent Posts</h3>

            <hr>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

                <div class="col">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('img/card1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">

                            <div class="d-flex justify-content-around">

                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-user me-2"></i>
                                        Isuru Ahinsa
                                    </small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-comment me-2"></i>
                                        50
                                    </small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-calendar me-2"></i>
                                        December 10, 2017
                                    </small>
                                </p>

                            </div>

                            <a class="text-decoration-none link-dark stretched-link" href="#">
                                <h5 class="card-title">
                                    Card title
                                </h5>
                            </a>

                            <h6>
                                <span class="badge" style="background-color: #7952b3">Category</span>
                            </h6>

                            <p class="card-text">
                                This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('img/card1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">

                            <div class="d-flex justify-content-around">

                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-user me-2"></i>
                                        Isuru Ahinsa
                                    </small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-comment me-2"></i>
                                        50
                                    </small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-calendar me-2"></i>
                                        December 10, 2017
                                    </small>
                                </p>

                            </div>

                            <a class="text-decoration-none link-dark stretched-link" href="#">
                                <h5 class="card-title">
                                    Card title
                                </h5>
                            </a>

                            <h6>
                                <span class="badge" style="background-color: #7952b3">Category</span>
                            </h6>

                            <p class="card-text">
                                This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('img/card1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">

                            <div class="d-flex justify-content-around">

                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-user me-2"></i>
                                        Isuru Ahinsa
                                    </small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-comment me-2"></i>
                                        50
                                    </small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-calendar me-2"></i>
                                        December 10, 2017
                                    </small>
                                </p>

                            </div>

                            <a class="text-decoration-none link-dark stretched-link" href="#">
                                <h5 class="card-title">
                                    Card title
                                </h5>
                            </a>

                            <h6>
                                <span class="badge" style="background-color: #7952b3">Category</span>
                            </h6>

                            <p class="card-text">
                                This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('img/card1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">

                            <div class="d-flex justify-content-around">

                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-user me-2"></i>
                                        Isuru Ahinsa
                                    </small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-comment me-2"></i>
                                        50
                                    </small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-calendar me-2"></i>
                                        December 10, 2017
                                    </small>
                                </p>

                            </div>

                            <a class="text-decoration-none link-dark stretched-link" href="#">
                                <h5 class="card-title">
                                    Card title
                                </h5>
                            </a>

                            <h6>
                                <span class="badge" style="background-color: #7952b3">Category</span>
                            </h6>

                            <p class="card-text">
                                This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('img/card1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">

                            <div class="d-flex justify-content-around">

                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-user me-2"></i>
                                        Isuru Ahinsa
                                    </small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-comment me-2"></i>
                                        50
                                    </small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-calendar me-2"></i>
                                        December 10, 2017
                                    </small>
                                </p>

                            </div>

                            <a class="text-decoration-none link-dark stretched-link" href="#">
                                <h5 class="card-title">
                                    Card title
                                </h5>
                            </a>

                            <h6>
                                <span class="badge" style="background-color: #7952b3">Category</span>
                            </h6>

                            <p class="card-text">
                                This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('img/card1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">

                            <div class="d-flex justify-content-around">

                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-user me-2"></i>
                                        Isuru Ahinsa
                                    </small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-comment me-2"></i>
                                        50
                                    </small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-calendar me-2"></i>
                                        December 10, 2017
                                    </small>
                                </p>

                            </div>

                            <a class="text-decoration-none link-dark stretched-link" href="#">
                                <h5 class="card-title">
                                    Card title
                                </h5>
                            </a>

                            <h6>
                                <span class="badge" style="background-color: #7952b3">Category</span>
                            </h6>

                            <p class="card-text">
                                This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('img/card1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">

                            <div class="d-flex justify-content-around">

                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-user me-2"></i>
                                        Isuru Ahinsa
                                    </small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-comment me-2"></i>
                                        50
                                    </small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-calendar me-2"></i>
                                        December 10, 2017
                                    </small>
                                </p>

                            </div>

                            <a class="text-decoration-none link-dark stretched-link" href="#">
                                <h5 class="card-title">
                                    Card title
                                </h5>
                            </a>

                            <h6>
                                <span class="badge" style="background-color: #7952b3">Category</span>
                            </h6>

                            <p class="card-text">
                                This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                            </p>

                        </div>
                    </div>
                </div>

            </div>

        </main>

    </div>

@endsection
