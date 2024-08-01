<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link @yield('dashbord-activation') active" href="{{ route('admin.main.dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link @yield('admins-activation')" href="">
                <i class="bi bi-person-gear"></i>
                <span>Admins</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link @yield('users-activation')" href="">
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
            <a class="nav-link @yield('messages-activation')" href="">
                <i class="bi bi-envelope-at"></i>
                <span>User Messages</span>
            </a>
        </li>

    </ul>

</aside>
