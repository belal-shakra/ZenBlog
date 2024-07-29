<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('main.home') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{asset('assets')}}/user/img/logo.png" alt="logo">
            <h1>ZenBlog</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('main.home') }}">Blog</a></li>
                <li class="dropdown">
                    <a type="button">
                        <span>Categories</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>

                    <ul>
                        @foreach ($categories as $category)
                            <li class="nav-item-hover">
                                <a href="{{ route('main.category', $category->category) }}">{{ $category->category }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li><a href="{{ route('main.about') }}">About</a></li>
                <li><a href="{{ route('contact.create') }}">Contact</a></li>
            </ul>
        </nav>

        <div class="position-relative">
            <div id="user" class="navbar">
                <div class="dropdown">
                    <a type="button">
                        <span class="fw-bold">
                            @auth
                                {{ Auth::user()->first_name }} {{  Auth::user()->last_name }}
                                <i class="bi bi-chevron-down dropdown-indicator"></i>
                            @endauth
                            </span>
                    </a>
                    <ul>
                        <li class="nav-item-hover"><a href="{{ route('blog.index') }}">My Blogs</a></li>
                        <li class="nav-item-hover"><a href="{{ route('blog.create') }}">Add new blog</a></li>
                        <li class="nav-item-hover"><a href="{{ route('profile.show') }}">Profile</a></li>
                        <li class="nav-item-hover">
                            <form action="{{ route('logout') }}" method="post" id="logout">
                                @csrf
                                <a type="button"
                                onclick="document.getElementById('logout').submit();"
                                >logout</a>
                            </form>
                        </li>
                    </ul>
                </div>

                @guest
                    <a href="{{ route('login') }}" class="fs-6">
                        login
                        <i class="bi bi-box-arrow-in-right fs-6"></i>
                    </a>
                @endguest
            </div>

            {{-- <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
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
