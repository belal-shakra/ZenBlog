<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function category(string $category_name){

        $category = Category::firstWhere('category', $category_name);
        if(!$category)
            abort(404);

        $category_blogs = Blog::where('category_id', $category->id)->get();
        return view('user.pages.category', [
            'category_blogs' =>Blog::where('category_id', $category->id)->paginate(),
            'category' => $category_name,
        ]);
    }
}
