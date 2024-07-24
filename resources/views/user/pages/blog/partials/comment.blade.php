<!-- ======= Comments ======= -->
<div class="comments">
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
                    <span class="text-muted"> {{ Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</span>
                </div>

                <div class="comment-body">{{ $comment->comment }}</div>

                {{-- <div class="comment-replies bg-light p-3 mt-3 rounded">
                    <h6 class="comment-replies-title mb-4 text-muted text-uppercase">2 replies</h6>

                    <div class="reply d-flex mb-4">
                    <div class="flex-shrink-0">
                        <div class="avatar avatar-sm rounded-circle">
                        <img class="avatar-img" src="{{asset('assets')}}/user//img/person-4.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-2 ms-sm-3">
                        <div class="reply-meta d-flex align-items-baseline">
                        <h6 class="mb-0 me-2">Brandon Smith</h6>
                        <span class="text-muted">2d</span>
                        </div>
                        <div class="reply-body">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        </div>
                    </div>
                    </div>
                    <div class="reply d-flex">
                    <div class="flex-shrink-0">
                        <div class="avatar avatar-sm rounded-circle">
                        <img class="avatar-img" src="{{asset('assets')}}/user//img/person-3.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-2 ms-sm-3">
                        <div class="reply-meta d-flex align-items-baseline">
                        <h6 class="mb-0 me-2">James Parsons</h6>
                        <span class="text-muted">1d</span>
                        </div>
                        <div class="reply-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolore sed eos sapiente, praesentium.
                        </div>
                    </div>
                    </div>
                </div> --}}
            </div>
        </div>
    @endforeach


</div><!-- End Comments -->
