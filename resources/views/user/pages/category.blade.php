@extends('user.layout')


@section('tab-title', 'ZenBlog | ' . $category)


@section('content')

    <main id="main">
        <section>
            <div class="container">
                <div class="row">

                    <div class="col-md-9">
                        <h3 class="category-title">Category: {{ $category }}</h3>

                        @foreach ($category_blogs as $blog)
                            <div class="d-lg-flex post-entry-2 me-1 row">
                                <div class="col col-md-5">
                                    <a href="{{ route('blog.show', $blog) }}" class="me- mb- b-lg-0 d-inline-block">
                                        <img src="{{asset('storage/'.$blog->file->path.'/'.$blog->file->name) }}" alt="" class="img-fluid">
                                    </a>
                                </div>

                                <div class="col col-md-7">
                                    <div class="post-meta">
                                        <span class="date">{{ $blog->category->category }}</span>
                                        <span class="mx-1">&bullet;</span>
                                        <span>{{ Carbon\Carbon::parse($blog->created_at, 'UTC')->setTimezone('Asia/Amman')->format('M jS o') }}</span>
                                    </div>

                                    <h3><a href="{{ route('blog.show', $blog) }}">{{ $blog->title }}</a></h3>
                                    <p class="text-truncate">{{ $blog->blog }}</p>
                                    <div class="d-flex align-items-center author">
                                        <div class="photo">
                                            <img src="{{asset('assets')}}/user/img/person-2.jpg" alt=""
                                            class="img-fluid">
                                        </div>
                                        <div class="name">
                                            <h3 class="m-0 p-0">{{ $blog->user->first_name }} {{ $blog->user->last_name }}</h3>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 col-3">
                                        <a href="{{ route('blog.show', $blog) }}" class="btn btn-primary px-5">Read</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        @if (!$category_blogs->count())
                            <div class="py-3 text-center">There is no any blogs belongs to this category.</div>
                        @endif


                            {{ $category_blogs->links() }}

                        {{-- <div class="text-start py-4">
                            <div class="custom-pagination">
                                <a href="#" class="prev">Prevous</a>
                                <a href="#" class="active">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <a href="#">5</a>
                                <a href="#" class="next">Next</a>
                            </div>
                        </div> --}}
                    </div>


                    <div class="col-md-3">
                        @include('user.partials.sidebar')
                    </div>

                </div>
            </div>
        </section>
    </main>

@endsection
