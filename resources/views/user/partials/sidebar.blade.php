<!-- ======= Sidebar ======= -->
<div class="aside-block">
    <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Popular</button>
        </li>
        <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill" data-bs-target="#pills-trending" type="button" role="tab" aria-controls="pills-trending" aria-selected="false">Trending</button>
        </li>
        <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest" type="button" role="tab" aria-controls="pills-latest" aria-selected="false">Latest</button>
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">

        <!-- Popular -->
        <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
            @foreach ($popular as $pop)
                <div class="post-entry-1 border-bottom">
                    <div class="post-meta">
                        <span class="date">{{ $pop->category->category }}</span>
                        <span class="mx-1">&bullet;</span>
                        <span>{{ Carbon\Carbon::parse($pop->created_at, 'UTC')->setTimezone('Asia/Amman')->format('M jS o') }}</span>
                    </div>
                    <h2 class="mb-2"><a href="{{ route('blog.show', $pop) }}">{{ $pop->title }}</a></h2>
                    <span class="author mb-3 d-block">{{ $pop->user->first_name }} {{ $pop->user->last_name }}</span>
                </div>
            @endforeach
        </div> <!-- End Popular -->

        <!-- Trending -->
        <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab">
            @foreach ($trending as $trend)
                <div class="post-entry-1 border-bottom">
                    <div class="post-meta">
                        <span class="date">{{ $trend->category->category }}</span>
                        <span class="mx-1">&bullet;</span>
                        <span>{{ Carbon\Carbon::parse($trend->created_at, 'UTC')->setTimezone('Asia/Amman')->format('M jS o') }}</span>
                    </div>
                    <h2 class="mb-2"><a href="{{ route('blog.show', $trend) }}">{{ $trend->title }}</a></h2>
                    <span class="author mb-3 d-block">{{ $trend->user->first_name }} {{ $trend->user->last_name }}</span>
                </div>
        @endforeach
        </div> <!-- End Trending -->

        <!-- Latest -->
        <div class="tab-pane fade" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab">
            @foreach ($latest as $last)
                <div class="post-entry-1 border-bottom">
                    <div class="post-meta">
                        <span class="date">{{ $last->category->category }}</span>
                        <span class="mx-1">&bullet;</span>
                        <span>{{ Carbon\Carbon::parse($last->created_at, 'UTC')->setTimezone('Asia/Amman')->format('M jS o') }}</span>
                    </div>
                    <h2 class="mb-2"><a href="{{ route('blog.show', $last) }}">{{ $last->title }}</a></h2>
                    <span class="author mb-3 d-block">{{ $last->user->first_name }} {{ $last->user->last_name }}</span>
                </div>
            @endforeach
        </div>

    </div>
</div>
