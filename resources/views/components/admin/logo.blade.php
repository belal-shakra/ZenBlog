<div class="d-flex justify-content-center py-4">
    <a href="{{ route('admin.main.dashboard') }}" class="logo d-flex align-items-center w-auto">
        <img src="{{ asset('assets') }}/admin/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
    </a>

    {{ $slot }}
</div>
