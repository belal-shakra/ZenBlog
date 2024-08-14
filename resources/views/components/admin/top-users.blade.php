<div class="col-12">
    <div class="card recent-sales overflow-auto">

        {{-- <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                </li>
                <li><a class="dropdown-item" href="#" data-target="#today" data-bs-toggle="tab">Today</a></li>
                <li><a class="dropdown-item" href="#" data-target="#month" data-bs-toggle="tab">This Month</a></li>
                <li><a class="dropdown-item" href="#" data-target="#year" data-bs-toggle="tab">This Year</a></li>
            </ul>
        </div> --}}

        <div class="card-body">
            <h5 class="card-title">Top Users <span></span></h5>

            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">No. of Blogs</th>
                        <th scope="col">User Info</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                            <td>{{ $user->username }}</td>
                            <td class="px-5 ">{{ $user->blogs->count() }}</td>
                            <td><a href="#" target="_blank">user profile</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>
</div>
