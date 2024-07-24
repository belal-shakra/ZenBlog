@extends('user.layout')


@section('tab-title', 'ZenBlog | Create a New Blog')


@section('content')

    <main id="main">
        <section id="index" class="mb-5">
            <div class="container">


                <x-main.session session="blogPublished" type="success"/>


                <div class="d-flex justify-content-center create-blog text-white h1">
                    <span style="font-size: 4rem">Create a New blog</span>
                </div>


                <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <x-form.input type="text" name="title" placeholder="Blog Title" :value="old('title')"/>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <x-form.select name="category_id" :data="$categories"/>
                        </div>
                    </div>

                    <span>Blog Image</span>
                    <x-form.input type="file" name="img" placeholder="Image" :value="old('file')"/>

                    <x-form.textarea type="text" name="blog" placeholder="Blog" :value="old('blog')"/>

                    <input type="submit" value="Add" class="px-5 my-5 btn btn-dark">
                </form>
            </div>
        </section>
    </main>

@endsection
