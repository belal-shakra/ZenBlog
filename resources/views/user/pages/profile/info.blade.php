<div class="row pt-3 flex-sm-row-reverse">
    <div class="col-sm-12 col-lg-6 mb-5">
        <x-main.session session="imageUpdated" type="success" />

        <div class="px-5">
            <div class="d-flex justify-content-center bg-secondary mb-3 rounded" style="max-height: 20rem">
                @if (Auth::user()->user_profile_image)
                    <x-user.profile-image width="70%"
                    :src="asset('storage/'. Auth::user()->user_profile_image->path .'/'. Auth::user()->user_profile_image->name)"/>
                @else
                    <x-user.profile-image width="70%"
                    :src="asset('storage/random/default-profile-image.png')"/>
                @endif
            </div>

            <form action="{{ route('user.profile.update_image') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div class="row ps-1">
                    <div class="col-sm-12 col-lg-9 py-1">
                        <x-form.input type="file" name="image" :value="old('image')" placeholder=""/>
                    </div>
                    <div class="col-sm-12 col-lg-3 py-1">
                        <input type="submit" value="Update Image" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="col-sm-12 col-lg-6 mb-5">
        <x-main.session session="profileUpdated" type="success" />


        <form action="{{ route('user.profile.update') }}" method="post">
            @csrf
            @method('patch')

            <div class="row">
                <div class="col col-sm-12 col-lg-6">
                    <label class="form-label ps-2 fw-bold">First Name</label>
                    <x-form.input type="text" name="first_name" placeholder="" :value="Auth::user()->first_name"/>
                </div>

                <div class="col col-sm-12 col-lg-6">
                    <label class="form-label ps-2 fw-bold">last Name</label>
                    <x-form.input type="text" name="last_name" placeholder="" :value="Auth::user()->last_name"/>
                </div>
            </div>


            <div class="">
                <label class="form-label ps-2 fw-bold">Username</label>
                <x-form.input type="text" name="username" placeholder="" :value="Auth::user()->username"/>
            </div>

            <div class="">
                <label class="form-label ps-2 fw-bold">Email</label>
                <x-form.input type="email" name="email" placeholder="" :value="Auth::user()->email"/>
            </div>


            <div class="py-2">
                <input type="submit" value="Update" class="btn btn-primary">
            </div>
        </form>
    </div>

</div>
