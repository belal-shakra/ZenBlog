<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link @yield('dashboard-activation')" href="{{ route('admin.main.dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link @yield('admins-activation')" href="{{ route('admin.admin.index') }}">
                <i class="bi bi-person-gear"></i>
                <span>Admins</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link @yield('users-activation')" href="{{ route('admin.user.admin-view.index') }}">
                <i class="bi bi-people"></i>
                <span>Users</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link @yield('blogs-activation')" href="">
                <i class="bi bi-text-paragraph"></i>
                <span>Blogs</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link @yield('messages-activation')" href="{{ route('contact.index') }}">
                <i class="bi bi-envelope-at"></i>
                <span>User Messages</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link @yield('about-activation')" href="{{ route('admin.about.create') }}">
                <i class="bi bi-envelope-at"></i>
                <span>About Us</span>
            </a>
        </li>

    </ul>

</aside>
