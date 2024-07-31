@foreach (Auth::user()->saves as $blog)
    <div class="row">
        <div class="col-11">
            <div class="d-lg-flex post-entry-2 me-1 my-3 row">
                <div class="col col-md-3">
                    <a href="" class="me- mb- b-lg-0 d-inline-block">
                        <img src="{{asset('storage/'.$blog->file->path.'/'.$blog->file->name) }}" alt="" class="img-fluid">
                    </a>
                </div>

                <div class="col col-md-8">
                    <div class="post-meta">
                        <span class="date">{{ $blog->category->category }}</span>
                        <span class="mx-1">&bullet;</span>
                        <span>{{ Carbon\Carbon::parse($blog->created_at, 'UTC')->setTimezone('Asia/Amman')->format('M jS o') }}</span>
                    </div>

                    <h3><a href="{{ route('blog.show', $blog) }}">{{ $blog->title }}</a></h3>
                    <p class="text-truncate">{{ $blog->blog }}</p>

                    <div class="d-flex align-items-center author">
                        <div class="photo">
                            @if ($blog->user->user_profile_image)
                                <x-user.profile-image width="auto"
                                :src="asset('storage/'. $blog->user->user_profile_image->path .'/'. $blog->user->user_profile_image->name)"/>
                            @else
                                <x-user.profile-image width="auto"
                                :src="asset('storage/random/default-profile-image.png')"/>
                            @endif
                        </div>
                        <div class="name">
                            <h3 class="m-0 p-0">{{ $blog->user->first_name }} {{ $blog->user->last_name }}</h3>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="col-1">
            <div class="dropdown my-2 fs-4">
                <a class="" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-three-dots"></i>
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <form action="{{ route('blog.save', $blog) }}" method="post" id="save-blog">
                            @csrf

                            <a class="dropdown-item"type=button
                            onclick="document.getElementById('save-blog').submit();"
                            >
                                Unsave
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <hr class="my-1">
@endforeach
