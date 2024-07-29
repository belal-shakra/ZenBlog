<div class="row pt-3">
    <div class="col-sm-12 col-lg-">

        <form action="" method="post" class="row">
            <div class="col-sm-12 col-lg-6">
                <label class="form-label ps-2 fw-bold">Password</label>
                <x-form.input type="password" name="password" placeholder="" :value="old('password')"/>
            </div>

            <div class="col-sm-12 col-lg-6">
                <label class="form-label ps-2 fw-bold">Password Confirmation</label>
                <x-form.input type="password" name="password_confirmation" placeholder="" :value="old('password_confirmation')"/>
            </div>


            <div class="py-2">
                <input type="submit" value="Change Password" class="btn btn-primary">
            </div>
        </form>

    </div>
</div>
