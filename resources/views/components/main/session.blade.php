@session($session)
    <div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
        {{ session($session) }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endsession
