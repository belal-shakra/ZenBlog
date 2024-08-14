<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminMainController extends Controller
{
    public function dashboard(){


        $blog['today'] = Blog::whereDate('created_at',Carbon::today())->count();
        $blog['month'] = Blog::whereDate('created_at', '>=',Carbon::today()->subDays(30))->count();
        $blog['year'] = Blog::whereDate('created_at', '>=',Carbon::today()->subDays(365))->count();
        $statisics = collect([$blog]);

        return view('admin.pages.dashboard', compact(['statisics']));
    }
}
