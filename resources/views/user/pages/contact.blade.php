@extends('user.layout')


@section('tab-title', 'ZenBlog | Contact us')


@section('content')

<main id="main">
    <section id="contact" class="contact mb-5">
        <div class="container">

            <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h1 class="page-title">Contact us</h1>
            </div>
            </div>

            <div class="row gy-4">

            <div class="col-md-4">
                <div class="info-item">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <address>A108 Adam Street, NY 535022, USA</address>
                </div>
            </div><!-- End Info Item -->

            <div class="col-md-4">
                <div class="info-item info-item-borders">
                <i class="bi bi-phone"></i>
                <h3>Phone Number</h3>
                <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                </div>
            </div><!-- End Info Item -->

            <div class="col-md-4">
                <div class="info-item">
                <i class="bi bi-envelope"></i>
                <h3>Email</h3>
                <p><a href="mailto:info@example.com">info@example.com</a></p>
                </div>
            </div><!-- End Info Item -->

            </div>


            <div class="form mt-5">
                <x-main.session session="contactSentSuccessfully" type="success" />

                <form action="{{ route('contact.store') }}" method="post" role="form" class="php-email-form">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <x-form.input type="text" name="name" placeholder="Your Name" :value="old('name')"/>
                        </div>
                        <div class="col-md-6">
                            <x-form.input type="text" name="email" placeholder="Your Email" :value="old('email')"/>
                        </div>
                    </div>

                    <x-form.input type="text" name="subject" placeholder="Subject" :value="old('subject')"/>

                    <x-form.textarea name="message" placeholder="Message" :value="old('message')"/>


                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>
    </section>

</main>

@endsection
