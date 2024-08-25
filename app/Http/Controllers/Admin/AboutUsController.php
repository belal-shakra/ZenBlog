<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helpers\Helper;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $about_contents = AboutUs::all();

        return view('admin.pages.about-us.create', compact(['about_contents']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:15',
            'content' => 'required|min:10|max:750',
            'image' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        $path = "main/about-us/";

        AboutUs::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => Helper::file_processing($request->image, $path),
            'path' => $path,
        ]);


        return back()->with('aboutaddedsuccessfully', "The about us content was added successfully.");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutUs $about)
    {
        return view('admin.pages.about-us.edit', ['about'=>$about]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutUs $about)
    {
        $updated_about = $request->validate([
            'title' => 'required|max:15',
            'image' => 'image|mimes:png,jpg,jpeg',
            'content' => 'required|min:10|max:750'
        ]);
        $path = "main/about-us/";
        $updated_about['path'] = $path;

        if($request->hasFile('image')){
            $updated_about['image'] = Helper::file_processing($request->image, $path);
        }

        $about->update($updated_about);
        $about->save();

        return to_route('admin.about.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutUs $about)
    {
        $about->delete();
        return back();
    }
}
