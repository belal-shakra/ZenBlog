<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserAdminViewController extends Controller
{
    public function index(){
        $users = User::orderByDesc('created_at')->get();
        return view('admin.pages.users.index', compact(['users']));
    }

    public function show(User $user){

        return view('admin.pages.users.show', ['user' => $user]);
    }
}
