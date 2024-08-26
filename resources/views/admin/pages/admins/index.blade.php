@extends('admin.layout')

@section('admins-activation', 'active')
@section('tab-title', 'Admins')


@section('content')

    <main id="main" class="main">

        <x-admin.page-title title="All Admins" sub="Admins" />


        <section>

            <div class="my-3">
                <a href="{{ route('admin.admin.create') }}" class="btn btn-primary shadow">Add new admin</a>
            </div>

            @if ($admins->count())
                <table class="table table-striped table-hover shadow">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Profile</th>
                        </tr>
                    </thead>

                    <tbody class="table-group-divider">
                        @foreach ($admins as $admin)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $admin->first_name }} {{ $admin->last_name }}</td>
                                <td>{{ $admin->username }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>
                                    <a href="{{ route('admin.admin.show', $admin) }}" class="dashboard-btn">Show</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="text-center">There are no admins yet.</div>
            @endif
        </section>

    </main>

@endsection
