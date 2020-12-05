<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    //shows list of post for the authenticated user
    public function index(User $user)
    {
        $posts = $user->posts()->with(['user','likes'])->paginate(20);

        return view('users.posts.index',[
            'user' => $user,
            'posts' => $posts
        ]);
    }
}
