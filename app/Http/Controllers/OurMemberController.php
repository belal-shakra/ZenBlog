<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\Helper;
use App\Models\OurMember;
use Illuminate\Http\Request;

class OurMemberController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|',
            'role' => 'required|',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'bio' => 'required|max:120',
        ]);
        $path = "Admin/team/members/";

        OurMember::create([
            'image' => Helper::file_processing($request->image, $path),
            'path' => $path,
            'name' => $request->name,
            'role' => $request->role,
            'bio' => $request->bio,
        ]);

        return back()->with('memberAddedSuccessfully', "The new member was added successfully.");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OurMember $member)
    {
        return view('admin.pages.about-us.edit-member', ['member'=> $member]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OurMember $member)
    {
        $updated_member = $request->validate([
            'name' => 'required|',
            'role' => 'required|',
            'image' => 'nullable|image|mimes:png,jpg,jpeg',
            'bio' => 'required|max:120',
        ]);

        if($request->hasFile('image')){
            $updated_member['image'] = Helper::file_processing($request->image, $member->path);
        }

        $member->update($updated_member);
        $member->save();



        return back()->with('memberUpdatedSuccessfully', "The member info was updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OurMember $member)
    {
        $member->delete();
        return back();
    }
}
