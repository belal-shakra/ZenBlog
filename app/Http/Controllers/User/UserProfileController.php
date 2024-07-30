<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helpers\Helper;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Blog;
use App\Models\User;
use App\Models\UserProfileImage;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    public function show(){

        $view = Blog::orderBy('views', 'desc')->firstWhere('user_id', Auth::user()->id);
        $comment = Blog::withCount('comments')->orderBy('comments_count', 'desc')
        ->firstWhere('user_id', Auth::user()->id);


        return view('user.pages.profile.profile', compact(['view', 'comment']));
    }


    public function update(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return to_route('user.profile.show')->with('profileUpdated', 'The Profile updated successfully.');
    }


    public function update_image(Request $request){

        $request->validate([
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg,'],
        ]);


        $path = "profile/". Auth::user()->id;
        $image = Helper::file_processing($request->image, $path);



        $old = UserProfileImage::firstWhere('user_id', Auth::user()->id);
        $old?->delete();
        Storage::delete("$path/$image");


        UserProfileImage::create([
            'name' => $image,
            'path' => $path,
            'user_id' => Auth::user()->id,
        ]);

        return to_route('user.profile.show')->with('imageUpdated', 'The Profile image updated successfully.');

    }

    public function reset_password(Request $request){
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


        $user = User::find(Auth::user()->id);
        $user->update(["password" => $request->password]);
        $user->save();


        return to_route('user.profile.show')->with('passwordUpdated', 'The password updated successfully.');
    }

}
