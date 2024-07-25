@extends('user.layout')


@section('tab-title', 'ZenBlog | Register')


@section('content')



    <main class="py-5">
        <section class="py-5 py-md-5">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                        <div class="card border border-light-subtle rounded-3 shadow">
                            <div class="card-body p-3 p-md-4 p-xl-5">
                                <div class="d-flex justify-content-center mb-3">
                                    <div class="logo d-flex align-items-center">
                                        <img src="{{asset('assets')}}/user/img/logo.png" alt="logo">
                                        <h1>ZenBlog</h1>
                                    </div>
                                </div>

                                <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Sign in to your account</h2>

                                <form action="{{ route('login') }}" method="POST">
                                    @csrf

                                    <div class="row gy-2 overflow-hidden">
                                        <div class="col-12">
                                            <x-input type="email" name="email" placeholder="Email" :value="old('email')"/>
                                        </div>

                                        <div class="col-12">
                                            <x-input type="password" name="password" placeholder="Password" :value="old('password')"/>
                                        </div>

                                        <div class="col-12">
                                            <div class="d-flex gap-2 justify-content-between">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="rememberMe">
                                                    <label class="form-check-label text-secondary" for="rememberMe">
                                                    Keep me logged in
                                                    </label>
                                                </div>

                                                <a href="#!" class="link-primary text-decoration-none">Forgot password?</a>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="d-grid my-3">
                                            <button class="btn btn-primary btn-lg" type="submit">Log in</button>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <p class="m-0 text-secondary text-center">Don't have an account? <a href="#!" class="link-primary text-decoration-none">Sign up</a></p>
                                        </div>
                                    </div>
                                </form>
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
