@extends('user.layout')


@section('tab-title', 'ZenBlog | Profile')



@section('content')

    <main id="main">
        <section id="index" class="mb-5">
            <div class="container">

                <div class="py-2">
                    <h1>User Profile</h1>
                </div>


                <div>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="statistics-tab" data-bs-toggle="tab" data-bs-target="#statistics-tab-pane" type="button" role="tab" aria-controls="statistics-tab-pane" aria-selected="true">Statistics</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="save-tab" data-bs-toggle="tab" data-bs-target="#save-tab-pane" type="button" role="tab" aria-controls="save-tab-pane" aria-selected="true">Saved</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active ps-2" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

                            <div class="ps-2 py-4">
                                <h2>Your Info</h2>

                                @include('user.pages.profile.info')
                            </div>


                            <div class="ps-2 py-4">
                                <h2>Change Password</h2>

                                @include('user.pages.profile.password')
                            </div>
                        </div>


                        <div class="tab-pane fade" id="statistics-tab-pane" role="tabpanel" aria-labelledby="statistics-tab" tabindex="0">
                            <div class="ps-2 py-4">
                                @include('user.pages.profile.statistics')
                            </div>
                        </div>

                        <div class="tab-pane fade" id="save-tab-pane" role="tabpanel" aria-labelledby="save-tab" tabindex="0">
                            <div class="ps-2 py-4">
                                @include('user.pages.profile.saved')
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

@endsection
