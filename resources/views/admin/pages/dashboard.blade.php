@extends('admin.layout')

@section('dashboard-activation', 'active')
@section('tab-title', 'Dashboard')


@section('content')

    <main id="main" class="main">

        <x-admin.page-title />

        <section class="section dashboard">
            <div class="row">

                <div class="col-lg-8">
                    <div class="row">

                        <x-admin.dashboard-card :statisics="$statisics"/>


                        <x-admin.top-users :users="$top_users"/>


                        <x-admin.top-blogs :blogs="$top_blogs"/>

                    </div>
                </div>

            </div>
        </section>

    </main>

@endsection
