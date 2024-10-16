<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\Category;
use App\Models\OurMember;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function home(){
        return view('user.pages.home.home');
    }

    public function about(){
        $abouts = AboutUs::all();
        $members = OurMember::all();
        return view('user.pages.about', compact(['abouts', 'members']));
    }

    public function category(string $category_name){

        $category = Category::firstWhere('category', $category_name);
        if(!$category)
            abort(404);

        $category_blogs = Blog::where('category_id', $category->id)->get();
        return view('user.pages.category', [
            'category_blogs' =>Blog::where('category_id', $category->id)->paginate(10),
            'category' => $category_name,
        ]);
    }
}
