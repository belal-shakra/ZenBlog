<?php

namespace App\Providers;

use App\Models\Blog;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['*'], function($view){
            $latest   = Blog::latest()->take(6)->get();
            $popular  = Blog::withCount('comments')->orderBy('comments_count', 'desc')->take(6)->get();
            $trending = Blog::orderBy('views', 'desc')->take(6)->get();


            $view->with('latest', $latest);
            $view->with('popular', $popular);
            $view->with('trending', $trending);
        });
    }
}
