<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    //middleware
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {

//        dd(Post::find(3)->created_at);

//        dd(auth()->user()->posts);
        return view('dashboard');
    }
}
