@extends('user.layout')


@section('tab-title', 'ZenBlog | My Blogs')


@section('content')

    <main id="main">
        <section id="index" class="mb-5">
            <div class="container">
                <div class="my-5"><h1>My Blogs ({{ $blogs->count() }})</h1></div>

                @foreach ($blogs as $blog)
                    <div class="my-2">
                        <div class="d-lg-flex post-entry-2 row">
                            <div class="col-4">
                                <a href="{{ route('blog.show', $blog) }}" class="me-sm- d-inline-block">
                                    <img src="{{asset('storage/'.$blog->file->path.'/'.$blog->file->name) }}" alt="" class="img-fluid">
                                </a>
                            </div>

                            <div class="col-8">
                                <div class="post-meta">
                                    <span class="date">{{ $blog->category->category }}</span>
                                    <span class="mx-1">&bullet;</span>
                                    <span>{{ $blog->created_at->format('M jS o') }}</span>
                                </div>

                                <h3 class="text-truncate"><a href="{{ route('blog.show', $blog) }}">{{ $blog->title }}</a></h3>
                                <p class="text-truncate d-sm-block d-none">{{ $blog->blog }}</p>

                                <div class="d-grid gap-2 col-3 d-lg-block d-none">
                                    <a href="{{ route('blog.show', $blog) }}" class="btn btn-primary px-5">Read</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
    </main>

@endsection
