<div class="row py-3">
    <h2>Statistics</h2>

    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-4">
        <div class="ps-2 bg-danger rounded">
            <div class="card shadow border border-1 border-danger">
                <div class="card-body row">
                    <div class="col-10 col-lg-9 col-xl-10">
                        <h5 class="card-title small lead fw-bold">Blogs</h5>
                        <p class="card-text">
                            <span class="fs-4">{{ Auth::user()->blogs->count() }}</span> blogs
                        </p>
                    </div>
                    <div class="col-2 col-lg-3 col-xl-2 fs-1">
                        <i class="bi bi-file-earmark-post"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-4">
        <div class="ps-2 bg-success rounded">
            <div class="card shadow border border-1 border-success">
                <div class="card-body row">
                    <div class="col-10 col-lg-9 col-xl-10">
                        <h5 class="card-title small lead fw-bold">Comment</h5>
                        <p class="card-text">
                            <span class="fs-4">{{ Auth::user()->comments->count() }}</span> comments
                        </p>
                    </div>
                    <div class="col-2 col-lg-3 col-xl-2 fs-1">
                        <i class="bi bi-chat-left-text-fill"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-4">
        <div class="ps-2 bg-primary rounded">
            <div class="card shadow border border-1 border-primary">
                <div class="card-body row">
                    <div class="col-10 col-lg-9 col-xl-10">
                        <h5 class="card-title small lead fw-bold">Replies</h5>
                        <p class="card-text">
                            <span class="fs-4">{{ Auth::user()->replies->count() }} </span>replies
                        </p>
                    </div>
                    <div class="col-2 col-lg-3 col-xl-2 fs-1">
                        <i class="bi bi-reply-all-fill"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<div class="row py-3">
    <h2>Has most :</h2>

    {{-- Views --}}
    @if ($view)
        <div class="col-sm-12 col-lg-6">
            <b>Views ({{ $view->views }})</b>
            <div class="d-lg-flex post-entry-2 me-1 row">
                <div class="col col-md-4">
                    <a href="" class="me- mb- b-lg-0 d-inline-block">
                        <img src="{{asset('storage/'.$view->file->path.'/'.$view->file->name) }}" alt="" class="img-fluid">
                    </a>
                </div>

                <div class="col col-md-8">
                    <div class="post-meta">
                        <span class="date">{{ $view->category->category }}</span>
                        <span class="mx-1">&bullet;</span>
                        <span>{{ Carbon\Carbon::parse($view->created_at, 'UTC')->setTimezone('Asia/Amman')->format('M jS o') }}</span>
                    </div>

                    <h3 class="text-truncate"><a href="{{ route('blog.show', $view) }}">{{ $view->title }}</a></h3>
                    <p class="text-truncate">{{ $view->blog }}</p>
                </div>
            </div>
        </div>
    @endif

    {{-- Comments --}}
    @if ($comment)
        <div class="col-sm-12 col-lg-6">
            <b>Comments ({{ $comment->comments->count() }})</b>
            <div class="d-lg-flex post-entry-2 me-1 row">
                <div class="col col-md-4">
                    <a href="" class="me- mb- b-lg-0 d-inline-block">
                        <img src="{{asset('storage/'.$comment->file->path.'/'.$comment->file->name) }}" alt="" class="img-fluid">
                    </a>
                </div>

                <div class="col col-md-8">
                    <div class="post-meta">
                        <span class="date">{{ $comment->category->category }}</span>
                        <span class="mx-1">&bullet;</span>
                        <span>{{ Carbon\Carbon::parse($comment->created_at, 'UTC')->setTimezone('Asia/Amman')->format('M jS o') }}</span>
                    </div>


                    <h3 class="text-truncate"><a href="{{ route('blog.show', $comment) }}">{{ $comment->title }}</a></h3>
                    <p class="text-truncate">{{ $comment->blog }}</p>
                </div>
            </div>
        </div>
    @endif
</div>
