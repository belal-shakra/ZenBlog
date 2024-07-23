<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="{{asset('assets')}}/user/img/logo.png" alt=""> -->
            <h1>ZenBlog</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('home') }}">Blog</a></li>
                <li><a href="single-post.html">Single Post</a></li>
                <li class="dropdown">
                    <a href="category.html">
                        <span>Categories</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <li class="nav-item-hover"><a href="search-result.html">Search Result</a></li>
                        <li class="nav-item-hover"><a href="#">Drop Down 1</a></li>
                        <li class="dropdown nav-item-hover"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li class="nav-item-hover"><a href="#">Deep Drop Down 1</a></li>
                                <li class="nav-item-hover"><a href="#">Deep Drop Down 2</a></li>
                                <li class="nav-item-hover"><a href="#">Deep Drop Down 3</a></li>
                                <li class="nav-item-hover"><a href="#">Deep Drop Down 4</a></li>
                                <li class="nav-item-hover"><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li class="nav-item-hover"><a href="#">Drop Down 2</a></li>
                        <li class="nav-item-hover"><a href="#">Drop Down 3</a></li>
                        <li class="nav-item-hover"><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>

                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>

        <div class="position-relative">
            <div id="user" class="navbar">
                <div class="dropdown">
                    <a type="button">
                        <span class="fw-bold">Belal Shakra</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <li class="nav-item-hover"><a href="{{ route('blog.index') }}">My Blogs</a></li>
                        <li class="nav-item-hover"><a href="{{ route('blog.create') }}">Add new blog</a></li>
                        <li class="nav-item-hover"><a href="{{ route('user.profile') }}">Profile</a></li>
                        <li class="nav-item-hover"><a href="{{ route('blog.index') }}">logout</a></li>
                    </ul>
                </div>
            </div>
{{--
            <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
            <i class="bi bi-list mobile-nav-toggle"></i>

            <div class="search-form-wrap js-search-form-wrap">
            <form action="search-result.html" class="search-form">
                <span class="icon bi-search"></span>
                <input type="text" placeholder="Search" class="form-control">
                <button class="btn js-search-close"><span class="bi-x"></span></button>
            </form>
            </div> --}}

        </div>

    </div>
</header>
