@if ($comment->replies->count())
    <div class="comment-replies bg-light pt-3 pb-2 px-3 mt-3 rounded">
        <h6 class="comment-replies-title mb-4 text-muted text-uppercase">{{ $comment->replies->count() }} replies</h6>

        @foreach ($comment->replies as $reply)
            <div class="reply d-flex mb-4">
                <div class="flex-shrink-0">
                    <div class="avatar avatar-sm rounded-circle">
                    <img class="avatar-img" src="{{asset('assets')}}/user/img/person-4.jpg" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="flex-grow-1 ms-2 ms-sm-3">
                    <div class="reply-meta d-flex align-items-baseline">
                    <h6 class="mb-0 me-2">{{ $reply->user->first_name }} {{ $reply->user->last_name }}</h6>
                    <span class="text-muted">{{ Carbon\Carbon::parse($reply->created_at)->diffForHumans() }}</span>
                    </div>
                    <div class="reply-body">
                        {{ $reply->reply }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endif
