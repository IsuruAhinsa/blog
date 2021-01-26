<style>

    .nav-link {
        color: #7952b3;
    }

    .nav-link:hover {
        color: #6a33bc;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show > .nav-link {
        color: #fff;
        background-color: #7952b3;
    }

</style>


<ul class="nav nav-pills py-4">
    <li class="nav-item">
        <a class="nav-link fw-bold active" href="#">
            <i class="far fa-user-circle me-2"></i>
            Profile
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link fw-bold" href="{{ route('categories.index') }}">
            <i class="far fa-sitemap me-2"></i>
            Categories
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link fw-bold" href="#">
            <i class="far fa-sticky-note me-2"></i>
            Posts
        </a>
    </li>
</ul>
