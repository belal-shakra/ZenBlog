<!DOCTYPE html>
<html lang="en">

    <head>
        @include('admin.partials.head')
    </head>


    <body>

        @if(!in_array('guest', Route::getCurrentRoute()->middleware()))
            @include('admin.partials.header')

            @include('admin.partials.sidebar')
        @endif


        @yield('content')



        @if(!in_array('guest', Route::getCurrentRoute()->middleware()))
            @include('admin.partials.footer')
        @endif



        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        @include('admin.partials.scripts')

    </body>

</html>
