<section id="hero-slider" class="hero-slider">
    <div class="container-md">
        <div class="row">
            <div class="col-12">

                <div id="hero" class="carousel slide">
                    {{-- <div class="carousel-indicators">
                        <button type="button" data-bs-target="#hero" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#hero" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#hero" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div> --}}

                    <div class="carousel-inner">
                        @foreach ($latest as $late)
                            <div class="carousel-item @if($loop->iteration == 1) active @endif">
                                <a href="{{ route('blog.show', $late) }}">
                                    <img src="{{asset('storage/'.$late->file->path.'/'.$late->file->name) }}"
                                    class="d-block w-100" alt="hero-image" height="500rem">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>{{ $late->title }}</h3>
                                        <p class="text-truncate">{{ $late->blog }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#hero" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#hero" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div>
    </div>
</section>
