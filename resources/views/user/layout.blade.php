<!DOCTYPE html>
<html lang="en">

        {{-- Head --}}
        @include('user.partials.head')

<body>


    @if(!in_array('guest', Route::getCurrentRoute()->middleware()))
        {{-- Header --}}
        @include('user.partials.nav')
    @endif


    {{-- Content --}}
    @yield('content')


    @if(!in_array('guest', Route::getCurrentRoute()->middleware()))
        {{-- Footer --}}
        @include('user.partials.footer')
    @endif

    {{-- <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}






</body>

</html>
