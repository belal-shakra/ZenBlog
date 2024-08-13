<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class AdminMainController extends Controller
{
    public function dashboard(){

        $blogNum = Blog::all()->count();
        $dailyViews = null;
        $topBlogs = null;

        return view('admin.pages.dashboard', compact(['blogNum', 'dailyViews', 'topBlogs']));
    }
}
