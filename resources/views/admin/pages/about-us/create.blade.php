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
                        <form action="{{ route('admin.about.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="">Image</label>
                            <x-form.input type="file" name="image" :value="null" :placeholder="null"/>
                            <x-form.textarea name="content" placeholder="Write here" :value="null"/>

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
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf

                            <x-form.input type="text" name="name" :value="null" placeholder="member's name"/>
                            <x-form.input type="text" name="roll" :value="null" placeholder="member's roll"/>

                            <label for="image">Image</label>
                            <x-form.input type="file" name="image" :value="null" :placeholder="null"/>

                            <x-form.textarea name="bio" placeholder="Write here" :value="null"/>

                            <div class="d-grid gap-2">
                                <input type="submit" value="Add" class="grid-btn">
                            </div>
                        </form>
                    </div>

                </div>
            </div>


            <div class="tab-pane fade show active py-4 px-3" id="preview-pane" role="tabpanel" aria-labelledby="preview" tabindex="0">
                <div class="row">
                    {{-- <div class="col-sm col-lg-">
                        <img decoding="async" src="https://via.placeholder.com/750x400/F00/FFF?About-Us+placeholder" alt="">
                    </div>
                    <div class="col-sm col-lg-6 px-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod tenetur eveniet maxime excepturi eius. Nihil illo sit laboriosam cumque deleniti, et est at magnam accusantium impedit cum accusamus consectetur aliquam minus harum molestias recusandae ab voluptas enim saepe repudiandae quis.</div> --}}

                    <div class="d-flex my-2">
                        <div class="p-2">
                            <img decoding="async" src="https://via.placeholder.com/750x400/F00/FFF?About-Us+placeholder" alt="">

                            <a href="" class="btn btn-primary my-1">Edit</a>
                            <a href="" class="btn btn-danger my-1">Delete</a>
                        </div>
                        <div class="p-2">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati nihil sit veniam autem nemo nobis dignissimos pariatur, rem omnis recusandae reprehenderit voluptate porro incidunt neque consectetur repudiandae ipsum repellat ut? Explicabo tenetur inventore eius quisquam, aperiam minus? Error porro ducimus exercitationem laudantium. Officiis exercitationem quibusdam repellat impedit minus rem aut magni sit dignissimos ad aliquid, tempora distinctio earum laudantium corporis?
                        </div>
                    </div>

                    <div class="d-flex flex-row-reverse my-2">
                        <div class="p-2">
                            <img decoding="async" src="https://via.placeholder.com/750x400/F00/FFF?About-Us+placeholder" alt="">

                            <a href="" class="btn btn-primary my-1">Edit</a>
                            <a href="" class="btn btn-danger my-1">Delete</a>
                        </div>
                        <div class="p-2">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati nihil sit veniam autem nemo nobis dignissimos pariatur, rem omnis recusandae reprehenderit voluptate porro incidunt neque consectetur repudiandae ipsum repellat ut? Explicabo tenetur inventore eius quisquam, aperiam minus? Error porro ducimus exercitationem laudantium. Officiis exercitationem quibusdam repellat impedit minus rem aut magni sit dignissimos ad aliquid, tempora distinctio earum laudantium corporis?
                        </div>
                    </div>



                    <hr class="border border-1 border-secondary">

                    <div>
                        <h2 class="text-center">Our Team</h2>

                        <div class="col-lg-3 text-center mb-5">
                            <img src="{{asset('assets')}}/user/img/person-1.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
                            <h4>Cameron Williamson</h4>
                            <span class="d-block mb-3 text-uppercase">Founder &amp; CEO</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime.</p>
                            <a href="" class="btn btn-primary my-1">Edit</a>
                            <a href="" class="btn btn-danger my-1">Delete</a>
                        </div>

                    </div>
                </div>


            </div>
        </div>





    </main>

@endsection
