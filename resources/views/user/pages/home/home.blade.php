@extends('user.layout')


@section('tab-title', 'ZenBlog | Home')


@section('content')

    <main id="main">

        @include('user.pages.home.partials.hero')

        @include('user.pages.home.partials.main')

    </main>

@endsection
