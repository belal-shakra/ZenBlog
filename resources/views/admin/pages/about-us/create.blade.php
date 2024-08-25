@extends('admin.layout')

@section('about-activation', 'active')
@section('tab-title', 'About Us')


@section('content')

    <main id="main" class="main">


        <x-admin.page-title sub="About Us" title="About Us" />


        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="create" data-bs-toggle="tab" data-bs-target="#create-pane" type="button" role="tab" aria-controls="create-pane" aria-selected="true">Content</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="team" data-bs-toggle="tab" data-bs-target="#team-pane" type="button" role="tab" aria-controls="team-pane" aria-selected="false">Our Team</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="preview" data-bs-toggle="tab" data-bs-target="#preview-pane" type="button" role="tab" aria-controls="preview-pane" aria-selected="false">Preview</button>
            </li>
        </ul>


        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show  py-4 px-3" id="create-pane" role="tabpanel" aria-labelledby="create" tabindex="0">
                <div class="row">

                    <div class="col-sm-md-12 col-lg-6">
                        <h2>Add Content</h2>

                        <x-main.session session="aboutaddedsuccessfully" type="success"/>

                        <form action="{{ route('admin.about.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <x-form.input type="text" name="title" :value="old('title')" placeholder="Title"/>

                            <label for="">Image</label>
                            <x-form.input type="file" name="image" :value="old('image')" :placeholder="null"/>

                            <x-form.textarea name="content" placeholder="Write here" :value="old('content')"/>

                            <div class="d-grid gap-2">
                                <input type="submit" value="Add" class="grid-btn">
                            </div>
                        </form>
                    </div>

                </div>
            </div>


            <div class="tab-pane fade py-4 px-3" id="team-pane" role="tabpanel" aria-labelledby="team" tabindex="0">
                <div class="row">

                    <div class="col-sm-md-12 col-lg-6">
                        <h2>Add new member</h2>

                        <x-main.session session="memberAddedSuccessfully" type="success" />

                        <form action="{{ route('admin.member.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <x-form.input type="text" name="name" :value="old('name')" placeholder="member's name"/>
                            <x-form.input type="text" name="role" :value="old('role')" placeholder="member's roll"/>

                            <label for="image">Image</label>
                            <x-form.input type="file" name="image" :value="old('image')" :placeholder="null"/>

                            <x-form.textarea name="bio" placeholder="Write here" :value="old('bio')"/>

                            <div class="d-grid gap-2">
                                <input type="submit" value="Add" class="grid-btn">
                            </div>
                        </form>
                    </div>

                </div>
            </div>


            <div class="tab-pane fade show active py-4 px-3" id="preview-pane" role="tabpanel" aria-labelledby="preview" tabindex="0">

                <div class="row d-flex">
                    @foreach ($about_contents as $content)
                        <div class="d-flex my-2 @if($loop->iteration%2 == 0)flex-row-reverse @endif justify-content-center">
                            <div class="p-2 w-50">
                                <img decoding="async" src="{{asset('storage/'.$content->path.'/'.$content->image) }}" alt="" class="img-fluid">
                                <br>
                                <div class="row">
                                    <div class="col-1">
                                        <a href="{{ route('admin.about.edit', $content) }}" class="btn btn-primary my-1">Edit</a>
                                    </div>
                                    <div class="col-1">
                                        <form action="{{ route('admin.about.destroy', $content) }}" method="post" id="about{{ $loop->iteration }}">
                                            @csrf
                                            @method('delete')
                                            <a type="button" class="btn btn-danger my-1"
                                            onclick="document.getElementById('about{{ $loop->iteration }}').submit();"
                                            >Delete</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 w-50">{{ $content->content }}</div>
                        </div>
                    @endforeach


                    <hr class="border border-1 border-secondary">

                    <div>
                        <h2 class="text-center">Our Team</h2>
                        <div class="row py-3 justify-content-center">
                            @foreach ($members as $member)
                                <div class="col-lg-3 text-center mb-5">
                                    <img src="{{asset('storage/'.$member->path.'/'.$member->image) }}" alt="" class="img-fluid mb-4"
                                    style="width: 15rem; height: 15rem; border-radius: 50%;">
                                    <h4>{{ $member->name }}</h4>
                                    <span class="d-block mb-3 text-uppercase">{{ $member->role }}</span>
                                    <p>{{ $member->bio }}</p>
                                    <div class="row justify-content-center">
                                        <div class="col-2">
                                            <a href="{{ route('admin.member.edit', $member) }}" class="btn btn-primary my-1">Edit</a>
                                        </div>
                                        <div class="col-2">
                                            <form action="{{ route('admin.member.destroy', $member) }}" method="post" id="member{{ $loop->iteration }}">
                                                @csrf
                                                @method('delete')
                                                <a type="button" class="btn btn-danger my-1"
                                                onclick="document.getElementById('member{{ $loop->iteration }}').submit();"
                                                >Delete</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>

@endsection
