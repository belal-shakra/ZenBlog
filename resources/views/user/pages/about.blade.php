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
                {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sint sed, fugit distinctio ad eius itaque deserunt doloribus harum excepturi laudantium sit officiis et eaque blanditiis. Dolore natus excepturi recusandae.</p> --}}
              </div>
            </div>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="{{asset('assets')}}/user/img/person-1.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Cameron Williamson</h4>
            <span class="d-block mb-3 text-uppercase">Founder &amp; CEO</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="{{asset('assets')}}/user/img/person-2.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Wade Warren</h4>
            <span class="d-block mb-3 text-uppercase">Founder, VP</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="{{asset('assets')}}/user/img/person-3.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Jane Cooper</h4>
            <span class="d-block mb-3 text-uppercase">Editor Staff</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="{{asset('assets')}}/user/img/person-4.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Cameron Williamson</h4>
            <span class="d-block mb-3 text-uppercase">Editor Staff</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="{{asset('assets')}}/user/img/person-5.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Cameron Williamson</h4>
            <span class="d-block mb-3 text-uppercase">Editor Staff</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="{{asset('assets')}}/user/img/person-6.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Cameron Williamson</h4>
            <span class="d-block mb-3 text-uppercase">Editor Staff</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
        </div>
      </div>
    </section>
</main>

@endsection
