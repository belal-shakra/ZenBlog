@extends('admin.layout')

@section('users-activation', 'active')
@section('tab-title', 'Blog Users')


@section('content')

    <main id="main" class="main">

        <x-admin.page-title title="All Users" sub="Users" />


        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-5">
                <div class="d-flex justify-content-center bg-secondary mb-3 rounded" style="max-height: 20rem; min-height: 20rem">
                    @if ($user->user_profile_image)
                        <x-user.profile-image width="50%"
                        :src="asset('storage/'. $user->user_profile_image->path .'/'. $user->user_profile_image->name)"/>
                    @else
                        <x-user.profile-image width="50%"
                        :src="asset('storage/random/default-profile-image.png')"/>
                    @endif
                </div>
            </div>

            <div class="col-sm-12 col-md-7 col-lg-7 py-4">
                <div>
                    <p class="fs-3">
                        <span class="fw-bold">Full Name : </span>{{ $user->first_name }} {{ $user->last_name }}
                    </p>

                    <p class="fs-3">
                        <span class="fw-bold">Username : </span>{{ $user->username }}
                    </p>

                    <p class="fs-3">
                        <span class="fw-bold">Email : </span>{{ $user->email }}
                    </p>

                    <p class="fs-3">
                        <span class="fw-bold">No. of blogs : </span>{{ $user->blogs->count() }}
                    </p>
                </div>


                <div>
                    <a href="" class="btn btn-danger">Block</a>
                    <a href="" class="btn btn-success">Send notification</a>
                    <a href="" class="btn btn-primary">xxxxxxx</a>
                </div>
            </div>
        </div>

        <hr class="my-5 border border-2 border-dark">


        <h2>User Blogs :</h2>
        @if ($user->blogs->count())
            <div class="row my-2">
                @foreach ($user->blogs as $blog)
                    <div class="col-sm-12 col-lg-6">
                        <a href="{{ route('blog.show', $blog) }}" target="_blank">
                            <div class="card mb-3 shadow" style="max-height: 10rem; min-height: 10rem;">
                                <div class="row g-0">
                                    <div class="col-md-4" >
                                        <img src="{{asset('storage/'.$blog->file->path.'/'.$blog->file->name) }}"
                                        style="max-height: 10rem; min-height: 10rem;"
                                        alt="" class="img-fluid rounded-start">
                                    </div>

                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $blog->title }}</h5>
                                            <p class="card-text text-truncate">{{ $blog->blog }}</p>
                                            <p class="card-text"><small class="text-body-secondary">
                                                {{ Carbon\Carbon::parse($blog->created_at, 'UTC')->setTimezone('Asia/Amman')->format('j.n.Y') }} --
                                                {{ Carbon\Carbon::parse($blog->created_at, 'UTC')->setTimezone('Asia/Amman')->format('G:i') }}
                                            </small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif


    </main>

@endsection
