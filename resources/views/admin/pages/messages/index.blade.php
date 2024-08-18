@extends('admin.layout')

@section('messages-activation', 'active')
@section('tab-title', 'Contact Messages')


@section('content')

    <main id="main" class="main">

        <x-admin.page-title title="Contact Messages" sub="Contact Messages" />


        <section>
            @if ($messages->count())
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
                        @foreach ($messages as $message)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td  class="w-50">{{ $message->message }}</td>
                                <td>
                                    {{ Carbon\Carbon::parse($message->created_at, 'UTC')->setTimezone('Asia/Amman')->format('M jS o') }}
                                </td>
                                <td>
                                    <a href="{{ route('contact.show', $message) }}" class="dashboard-btn">Show</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="text-center">There are no contact messages.</div>
            @endif
        </section>

    </main>

@endsection
