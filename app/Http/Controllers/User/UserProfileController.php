<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function show(){
        return view('user.pages.profile.profile');
    }


    public function update(Request $request){

    }
}
