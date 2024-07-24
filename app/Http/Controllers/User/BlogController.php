<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Controllers\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::where('user_id', Auth::user()->id)->get();
        return view('user.pages.blog.index', compact(['blogs']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.pages.blog.create', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $blog = $request->validated();
        $blog['user_id'] = Auth::user()->id;
        $path = "blogs/". Auth::user()->id;

        $image = Helper::file_processing($request->img, $path);


        $blog = Blog::create($blog);
        File::create([
            'name' => $image,
            'path' => $path,
            'blog_id' => $blog->id,
        ]);


        return back()->with('blogPublished', 'The Blog published Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('user.pages.blog.show', ['blog'=>$blog]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
