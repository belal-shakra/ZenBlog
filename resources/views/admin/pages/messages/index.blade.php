@extends('admin.layout')

@section('messages-activation', 'active')
@section('tab-title', 'Contact Messages')


@section('content')

    <main id="main" class="main">

        <x-admin.page-title title="Contact Messages" sub="Contact Messages" />


        <section>
            <table class="table table-striped table-hover shadow">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                        <th scope="col">Sent at</th>
                        <th scope="col">show</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <th scope="row">1</th>
                        <td>Soso Fofo</td>
                        <td>soso@fofo.com</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis in accusamus vel similique illum dolorum.</td>
                        <td>22.5.2024 --- 20:45</td>
                        <td><a href="" class="dashboard-btn">Show</a></td>
                    </tr>
                </tbody>
            </table>
        </section>

    </main>

@endsection
