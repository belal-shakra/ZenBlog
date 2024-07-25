@extends('user.layout')


@section('tab-title', 'ZenBlog | Register')


@section('content')


    <main id="main">
        <section class="h-100">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card card-registration my-4 shadow-lg">
                            <div class="row g-0 shadow">
                                <div class="col-xl-6 d-none d-xl-block">
                                    <img src="https://img.freepik.com/premium-vector/illustration-vector-graphic-cartoon-character-blogging_516790-1495.jpg"
                                    alt="register-photo" class="img-fluid"
                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; width: 85%;" />
                                </div>

                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-5 text-uppercase text-center">Register</h3>


                                        <form action="{{ route('register') }}" method="post">
                                            @csrf

                                            <div class="row">
                                                <div class="col col-sm-12 col-lg-6 mb-2">
                                                    <x-form.input type="first_name" name="first_name" :value="old('first_name')" placeholder="First Name"/>
                                                </div>
                                                <div class="col col-sm-12 col-lg-6 mb-2">
                                                    <x-form.input type="last_name" name="last_name" :value="old('last_name')" placeholder="Last Name"/>
                                                </div>
                                            </div>

                                            <x-form.input type="username" name="username" :value="old('username')" placeholder="Username"/>

                                            <x-form.input type="email" name="email" :value="old('email')" placeholder="Email"/>

                                            <x-form.input type="password" name="password" :value="old('password')" placeholder="Password"/>

                                            <x-form.input type="password" name="password_confirmation" :value="old('password_confirmation')" placeholder="Password Confirmation"/>



                                            <div class="py-1">
                                                already have an account?
                                                <a href="{{ route('user.login') }}"
                                                style="color: rgb(41 115 255); text-decoration:underline;">login</a>
                                            </div>


                                            <input type="submit" value="Register" class="col-12 btn btn-primary">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>





    <footer class="d-flex justify-content-center">
        <b>ZenBlog&copy;{{ date('Y') }}</b>
    </footer>

@endsection
