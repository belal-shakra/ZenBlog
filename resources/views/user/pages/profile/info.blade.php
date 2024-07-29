<div class="row pt-3 flex-sm-row-reverse">
    <div class="col-sm-12 col-lg-6 mb-5">
        <div class="px-5">
            <div class="d-flex justify-content-center bg-secondary mb-3 rounded">
                <img decoding="async" src="{{ asset('storage/random/me-md.jpg') }}" alt="" class="img-fluid" width="50%">
            </div>

            <form action="" method="post">
                <div class="row ps-1">
                    <div class="col-sm-12 col-lg-9 py-1">
                        <input type="file" name="file" class="form-control border border-1 border-dark">
                    </div>
                    <div class="col-sm-12 col-lg-3 py-1">
                        <input type="submit" value="Update Image" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="col-sm-12 col-lg-6 mb-5">
        <form action="{{ route('profile.update') }}" method="post">
            @csrf
            @method('patch')

            <div class="row">
                <div class="col col-sm-12 col-lg-6">
                    <label class="form-label ps-2 fw-bold">Last Name</label>
                    <x-form.input type="text" name="last_name" placeholder="" :value="Auth::user()->first_name"/>
                </div>

                <div class="col col-sm-12 col-lg-6">
                    <label class="form-label ps-2 fw-bold">First Name</label>
                    <x-form.input type="text" name="first_name" placeholder="" :value="Auth::user()->last_name"/>
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
