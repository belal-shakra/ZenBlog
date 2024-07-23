<!DOCTYPE html>
<html lang="en">

    {{-- Head --}}
    @include('user.partials.head')

<body>

    {{-- Header --}}
    @include('user.partials.nav')


    {{-- Content --}}
    @yield('content')


    {{-- Footer --}}
    @include('user.partials.footer')



    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>






</body>

</html>
