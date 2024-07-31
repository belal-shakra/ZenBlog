<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Controllers\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    function __construct()
    {
        $this->middleware('auth')->except(['show']);
    }

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
        $viewedBlogs = session()->get('viewed_blogs', []);

        if (!in_array($blog->id, $viewedBlogs)) {
            $blog->increment('views');
            session()->push('viewed_blogs', $blog->id);
        }

        return view('user.pages.blog.show', ['blog'=>$blog]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        if(Auth::check() && $blog->user_id != Auth::user()->id)
            return to_route('blog.index');


        return view('user.pages.blog.edit', [
            'blog'=>$blog,
            'categories'=>Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        if($blog->user_id != Auth::user()->id)
            return to_route('blog.index');

        $blog->update($request->validated());
        $blog->save();

        if($request->hasFile('img')){
            $file = File::firstWhere('blog_id', $blog->id);
            Storage::delete("$file->path/$file->name");
            $file->update(['name' => Helper::file_processing($request->img, "blogs/". Auth::user()->id)]);
            $file->save();
        }

        return to_route('blog.show', $blog)->with('blogUpdated', 'The Blog updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if($blog->user_id == Auth::user()->id)
            $blog->delete();

        return to_route('blog.index');
    }


    public function save(Blog $blog){

        if(!$blog->users?->first()?->id)
            $blog->users()->attach(Auth::user()->id);
        else
            $blog->users()->detach(Auth::user()->id);

        return back();
    }
}
