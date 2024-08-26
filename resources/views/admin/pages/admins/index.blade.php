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

            @if ($admins->count() == 0)
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
                            <tr>
                                <th scope="row">1</th>
                                <td>Belal Shakra</td>
                                <td>belal_shakra</td>
                                <td>belal@shakra.com</td>
                                <td>
                                    <a href="" class="dashboard-btn">Show</a>
                                </td>
                            </tr>
                    </tbody>
                </table>
            @else
                <div class="text-center">There are no admins yet.</div>
            @endif
        </section>

    </main>

@endsection
