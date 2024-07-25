<!-- ======= Comments ======= -->
<div class="comments pt-5"  id="comments">
    <h5 class="comment-title py-4">{{ $blog->comments->count() }} Comments</h5>

    @foreach ($blog->comments as $comment)
        <div class="comment d-flex mb-4">
            <div class="flex-shrink-0">
                <div class="avatar avatar-sm rounded-circle">
                    <img class="avatar-img" src="{{asset('assets')}}/user//img/person-5.jpg" alt="" class="img-fluid">
                </div>
            </div>

            <div class="flex-grow-1 ms-2 ms-sm-3">
                <div class="comment-meta d-flex align-items-baseline">
                    <h6 class="me-2">{{ $comment->user->first_name }}{{ $comment->user->last_name }}</h6>
                    <span class="text-muted">{{ Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</span>
                </div>

                <div class="comment-body">{{ $comment->comment }}</div>


                <div class="accordion pt-3" id="replies{{ $loop->iteration }}">
                    <a type="button" data-bs-toggle="collapse" data-bs-target="#reply{{ $loop->iteration }}"
                    style="color: rgb(0, 68, 255)">
                        replies ({{ $comment->replies->count() }})
                    </a>

                    <div id="reply{{ $loop->iteration }}"
                        class="accordion-collapse collapse" data-bs-parent="#replies{{ $loop->iteration }}">
                        <div class="accordion-body">
                            @include('user.pages.blog.partials.reply')
                        </div>
                    </div>
                </div>


                @auth
                    <div class="my-2">
                        <form action="{{ route('reply.store', $comment) }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control border border-1 border-secondary"
                                placeholder="Reply" name="reply" value="{{ old('reply') }}">
                                <input type=submit class="input-group-text btn btn-primary" value="Reply">
                            </div>
                        </form>
                    </div>
                @endauth
            </div>

        </div>
    @endforeach


</div><!-- End Comments -->
