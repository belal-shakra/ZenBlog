<div class="col-lg-4">

    <div class="trending">
    <h3>Trending</h3>
        <ul class="trending-post">
            @foreach ($trending as $trend)
                <li>
                    <a href="single-post.html">
                        <span class="number">{{ $loop->iteration }}</span>
                        <h3>{{ $trend->title }}</h3>
                        <span class="author">{{ $trend->user->first_name }} {{ $trend->user->last_name }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

</div>
