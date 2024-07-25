<?php

namespace App\Http\Controllers\User;

use App\Models\Blog;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Blog $blog)
    {
        $request->validate([
            'comment' => ['required', 'max:500'],
        ]);

        Comment::create([
            'comment' => $request->comment,
            'user_id' => Auth::user()->id,
            'blog_id' => $blog->id,
        ]);

        return redirect("blog/$blog->id#comments");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
