<footer id="footer" class="footer">

    <div class="footer-content">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <h3 class="footer-heading">About ZenBlog</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab, perspiciatis beatae autem deleniti voluptate nulla a dolores, exercitationem eveniet libero laudantium recusandae officiis qui aliquid blanditiis omnis quae. Explicabo?</p>
                    <p><a href="{{ route('main.about') }}" class="footer-link-more">Learn More</a></p>
                </div>

                <div class="col-6 col-lg-2"></div>

                <div class="col-6 col-lg-2">
                    <h3 class="footer-heading">Categories</h3>
                    <ul class="footer-links list-unstyled">
                        @foreach ($categories as $category)
                            <li>
                                <a href="{{ route('main.category', $category->category) }}">
                                    <i class="bi bi-chevron-right"></i>
                                    {{ $category->category }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-4">
                    <h3 class="footer-heading">Recent Posts</h3>

                    <ul class="footer-links footer-blog-entry list-unstyled">
                        @foreach ($latest as $late)
                            <li>
                                <a href="single-post.html" class="d-flex align-items-center">
                                    <img src="{{asset('storage/'.$late->file->path.'/'.$late->file->name) }}"
                                    alt="" class="img-fluid me-3">
                                    <div>
                                        <div class="post-meta d-block">
                                            <span class="date">{{ $late->category->category }}</span>
                                            <span class="mx-1">&bullet;</span>
                                            <span>{{ $late->created_at->format('M jS o') }}</span>
                                        </div>
                                        <span>{{ $late->title }}</span>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>

    @include('user.partials.footer-legal')

</footer>
