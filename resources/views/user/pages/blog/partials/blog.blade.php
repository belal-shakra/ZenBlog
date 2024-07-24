<!-- ======= Single Post Content ======= -->
<div class="single-post">
    <div class="post-meta row">
        <div class="col col-9 d-flex align-items-center">
            <span class="date">{{ $blog->category->category }}</span>
            <span class="mx-1">&bullet;</span>
            <span>{{ $blog->created_at->format('M jS o') }}</span>
        </div>

        <div class="col col-3">
            <div class="d-flex flex-row-reverse">
                <div class="dropdown my-2 fs-4">
                    <a class="" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-three-dots"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Edit</a></li>
                        <li>
                            <!-- Button trigger modal -->
                            <a class="dropdown-item bg-danger text-white" data-bs-toggle="modal" data-bs-target="#delete-blog"
                            href="">
                                Delete
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <h1 class="mb-3">{{ $blog->title }}</h1>

    <figure class="my-4">
        <img src="{{asset('storage/'.$blog->file->path.'/'.$blog->file->name) }}" alt="" class="img-fluid"style="width: 95%">
    </figure>


    <p class="pe-3">
        {{-- <span class="firstcharacter">L</span> --}}
        {!! nl2br($blog->blog) !!}
    </p>
</div>
