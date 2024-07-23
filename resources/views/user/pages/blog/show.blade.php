@extends('user.layout')


@section('tab-title', 'ZenBlog | Contact us')


@section('content')


<main id="main">

    <section class="single-post-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 post-content">

                    @include('user.pages.blog.partials.blog')

                    @include('user.pages.blog.partials.comment')

                    @include('user.pages.blog.partials.comment-form')

                </div>



                <div class="col-md-3">
                    @include('user.partials.sidebar')
                </div>
            </div>
        </div>
    </section>

</main>

@endsection
