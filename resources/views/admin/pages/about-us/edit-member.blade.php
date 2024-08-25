@extends('admin.layout')

@section('about-activation', 'active')
@section('tab-title', 'About Us | Edit')


@section('content')

    <main id="main" class="main">

        <x-admin.page-title sub="About Us" title="About Us" />


        <div class="row">
            <div class="col-sm-md-12 col-lg-6">
                <h2>Update member</h2>

                <x-main.session session="memberUpdatedSuccessfully" type="success" />

                <form action="{{ route('admin.member.update', $member) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <x-form.input type="text" name="name" :value="$member->name" placeholder="member's name"/>
                    <x-form.input type="text" name="role" :value="$member->role" placeholder="member's roll"/>

                    <label for="image">Image</label> | <b> If you want to change image select a new one, otherwise don't select. </b>
                    <x-form.input type="file" name="image" :value="$member->image" :placeholder="null"/>

                    <x-form.textarea name="bio" placeholder="Write here" :value="$member->bio"/>

                    <div class="d-grid gap-2">
                        <input type="submit" value="Update" class="grid-btn">
                    </div>
                </form>
            </div>


            <div class="col-sm-md-12 col-lg-6 pt-2 d-flex justify-content-center">
                <img decoding="async" src="{{asset('storage/'.$member->path.'/'.$member->image) }}" alt="" class="img-fluid mt-5" width="60%">
            </div>
        </div>

    </main>

@endsection
