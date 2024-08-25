@extends('user.layout')


@section('tab-title', 'ZenBlog | About us')


@section('content')

<main id="main">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">About us</h1>
                </div>
            </div>

            <div class="row mb-5">
                @foreach ($abouts as $about)
                    <div class="d-md-flex post-entry-2 half my-5 py-4 @if($loop->iteration%2 == 0)flex-row-reverse @endif">
                        <a class="thumbnail">
                            <img decoding="async" src="{{asset('storage/'.$about->path.'/'.$about->image) }}" alt="" class="img-fluid">
                        </a>
                        <div class="p-3 ps-md-5 mt-4 mt-md-0">
                            <h2 class="mb-4 display-4">{{ $about->title }}</h2>

                            <p>{!! nl2br($about->content) !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <h2 class="display-4">Our Team</h2>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="row py-3 justify-content-center">
                        @foreach ($members as $member)
                            <div class="col-lg-3 text-center mb-5">
                                <img src="{{asset('storage/'.$member->path.'/'.$member->image) }}" alt="" class="img-fluid mb-4"
                                style="width: 15rem; height: 15rem; border-radius: 50%;">
                                <h4>{{ $member->name }}</h4>
                                <span class="d-block mb-3 text-uppercase">{{ $member->role }}</span>
                                <p>{{ $member->bio }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
