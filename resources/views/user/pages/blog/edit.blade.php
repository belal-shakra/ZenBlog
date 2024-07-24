@extends('user.layout')


@section('tab-title', 'ZenBlog | Update Blog')



@section('content')

    <main id="main">
        <section id="index" class="mb-5">
            <div class="container">

                <div class="d-flex justify-content-center create-blog text-white h1"
                style="background-image: url('{{asset('storage/'.$blog->file->path.'/'.$blog->file->name) }}'); height: 25rem;">
                <span style="font-size: 4rem"></span>
                </div>



                <form action="{{ route('blog.update', $blog) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <x-form.input type="text" name="title" placeholder="Blog Title" :value="$blog->title"/>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="mb-2">
                                <select class="form-select border border-1 border-secondary" name="category_id">
                                    <option selected>Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            @if($category->id == $blog->category_id) selected @endif>{{ $category->category }}</option>
                                    @endforeach
                                </select>
                                <x-form.error name="category_id" />
                            </div>

                        </div>
                    </div>

                    <span>Blog Image,</span> <b>If you want to change blog image select a new one, otherwise don't select.</b>
                    <x-form.input type="file" name="img" placeholder="Image" :value="old('file')"/>

                    <x-form.textarea type="text" name="blog" placeholder="Blog" :value="$blog->blog"/>

                    <input type="submit" value="Update" class="px-5 my-5 btn btn-dark">
                </form>
            </div>
        </section>
    </main>

@endsection
