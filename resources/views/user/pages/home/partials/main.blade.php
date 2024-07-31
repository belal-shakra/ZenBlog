<section id="posts" class="posts">
    <div class="container">
        <div class="row g-5">

            <div class="col-lg-5">
                @foreach ($latest as $blog)

                    @if ($loop->index > 2)
                        <div class="post-entry-1 lg">
                            <a href="{{ route('blog.show', $blog) }}">
                                <img src="{{asset('storage/'.$blog->file->path.'/'.$blog->file->name) }}"
                                alt="blog-image" class="img-fluid">
                            </a>

                            <div class="post-meta">
                                <span class="date">{{ $blog->category->category }}</span>
                                <span class="mx-1">&bullet;</span>
                                <span>{{ Carbon\Carbon::parse($blog->created_at, 'UTC')->setTimezone('Asia/Amman')->format('M jS o') }}</span>
                            </div>

                            <h2>
                                <a href="{{ route('blog.show', $blog) }}">{{ $blog->title }}</a>
                            </h2>


                            <div class="d-flex align-items-center author">
                                <div class="photo">
                                    <x-user.profile-image width="auto"
                                    :src="asset('storage/'. $blog->user->user_profile_image->path .'/'. $blog->user->user_profile_image->name)"
                                    />
                                </div>
                                <div class="name">
                                    <h3 class="m-0 p-0">{{ $blog->user->first_name }} {{ $blog->user->last_name }}</h3>
                                    <small>{{ $blog->user->username }}</small>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($loop->index == 2+2)
                        @break
                    @endif
                @endforeach
            </div>


            <div class="col-lg-3">
                @foreach ($latest as $blog)
                    <div class="post-entry-1">
                        <a href="{{ route('blog.show', $blog) }}">
                            <img src="{{asset('storage/'.$blog->file->path.'/'.$blog->file->name) }}"
                            alt="" class="img-fluid">
                        </a>

                        <div class="post-meta">
                            <span class="date">{{ $blog->category->category }}</span>
                            <span class="mx-1">&bullet;</span>
                            <span>{{ Carbon\Carbon::parse($blog->created_at, 'UTC')->setTimezone('Asia/Amman')->format('M jS o') }}</span>
                        </div>

                        <h2>
                            <a href="{{ route('blog.show', $blog) }}">{{ $blog->title }}</a>
                        </h2>
                    </div>

                    @if ($loop->index == 2)
                        @break
                    @endif
                @endforeach
            </div>


            {{-- Ternding --}}
            @include('user.pages.home.partials.trending')
        </div>
    </div>
</section>
