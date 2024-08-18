@extends('admin.layout')

@section('users-activation', 'active')
@section('tab-title', 'Blog Users')


@section('content')

    <main id="main" class="main">

        <x-admin.page-title title="All Users" sub="Users" />


        <section>
            @if ($users->count())
                <table class="table table-striped table-hover shadow">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Registed at</th>
                            <th scope="col">No. of blogs</th>
                            <th scope="col">show</th>
                        </tr>
                    </thead>

                    <tbody class="table-group-divider">
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    {{ Carbon\Carbon::parse($user->created_at, 'UTC')->setTimezone('Asia/Amman')->format('M jS o') }}
                                </td>
                                <td>
                                    {{ $user->blogs->count() }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.user.admin-view.show', $user) }}" class="dashboard-btn">Show</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="text-center">There are no users yet.</div>
            @endif
        </section>

    </main>

@endsection
