<?php

namespace App\Http\Controllers\User;

use App\Models\Comment;
use App\Models\Reply;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Comment $comment)
    {
        $request->validate([
            'reply' => ['required', 'max:500'],
        ]);

        Reply::create([
            'reply' => $request->reply,
            'user_id' => Auth::user()->id,
            'comment_id' => $comment->id,
        ]);

        return redirect("blog/". $comment->blog->id ."#comments");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reply $reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reply $reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reply $reply)
    {
        //
    }
}
