<div class="col-12">
    <div class="card top-selling overflow-auto">

    {{-- <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <li class="dropdown-header text-start">
            <h6>Filter</h6>
        </li>

        <li><a class="dropdown-item" href="#">Today</a></li>
        <li><a class="dropdown-item" href="#">This Month</a></li>
        <li><a class="dropdown-item" href="#">This Year</a></li>
        </ul>
    </div> --}}

    <div class="card-body pb-0">
        <h5 class="card-title">Top Blogs<span></span></h5>

        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" class="text-truncate">Post Title</th>
                    <th scope="col">Auther</th>
                    <th scope="col">views</th>
                    <th scope="col">Published at</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td><a href="{{ route('blog.show', $blog) }}" target="_blank"
                            class="text-primary fw-bold">{{ $blog->title }}</a></td>
                        <td>{{ $blog->user->first_name }} {{ $blog->user->last_name }}</td>
                        <td class="fw-bold px-3">{{ $blog->views }}</td>
                        <td>{{ Carbon\Carbon::parse($blog->created_at, 'UTC')->setTimezone('Asia/Amman')->format('j-M-Y --- H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    </div>
</div>
