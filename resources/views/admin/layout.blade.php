<!DOCTYPE html>
<html lang="en">

    <head>
        @include('admin.partials.head')
    </head>


    <body>

        @include('admin.partials.header')


        @include('admin.partials.sidebar')


        @yield('content')


        @include('admin.partials.footer')


        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


        @include('admin.partials.scripts')

    </body>

</html>
