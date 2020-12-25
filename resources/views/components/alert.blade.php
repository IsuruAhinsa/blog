@if(session()->has('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="far fa-check-circle me-1"></i>
        {!! session()->get('success') !!}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif
