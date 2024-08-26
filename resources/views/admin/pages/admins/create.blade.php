@extends('admin.layout')

@section('admins-activation', 'active')
@section('tab-title', 'Admins')


@section('content')

    <main id="main" class="main">

        <x-admin.page-title title="Add new Admin" sub="Admin" />


        <section class="py-3 px-2">
            <h2>Add new admin</h2>

            <x-main.session session="adminWasAdded" type="success"/>

            <div class="col-sm-12 col-lg-6 py-2">
                <form action="{{ route('admin.admin.store') }}" method="post">
                    @csrf


                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <x-form.input type="text" name="first_name" placeholder="First Name" :value="old('first_name')" />
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <x-form.input type="text" name="last_name" placeholder="Last Name" :value="old('last_name')" />
                        </div>
                    </div>


                    <x-form.input type="text" name="username" placeholder="Username" :value="old('username')" />
                    <x-form.input type="email" name="email" placeholder="Email" :value="old('email')" />


                    <div class="d-grid gap-2">
                        <input type="submit" value="Add" class="grid-btn">
                    </div>
                </form>
            </div>


        </section>

    </main>

@endsection
