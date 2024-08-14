<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminMainController extends Controller
{
    public function dashboard(){

        # Statistics
        ## blogs
        $blog['today'] = Blog::whereDate('created_at',Carbon::today())->count();
        $blog['month'] = Blog::whereDate('created_at', '>=',Carbon::today()->subDays(30))->count();
        $blog['year'] = Blog::whereDate('created_at', '>=',Carbon::today()->subDays(365))->count();

        ## users
        $user['today'] = User::whereDate('created_at', Carbon::today())->count();
        $user['month'] = User::whereDate('created_at','>=', Carbon::today()->subDays(30))->count();
        $user['year'] = User::whereDate('created_at','>=', Carbon::today()->subDays(365))->count();


        $statisics = collect([$blog, $user]);



        # Top Users
        $top_users = User::withCount('blogs')->orderBy('blogs_count', 'desc')->take(5)->get();

        # Top Blogs
        $top_blogs = Blog::orderBy('views', 'desc')->take(5)->get();

        return view('admin.pages.dashboard', compact(['statisics', 'top_users', 'top_blogs']));
    }
}
