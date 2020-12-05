<?php

namespace App\Http\Controllers;

use App\Models\Post;
use http\Env\Response;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->with('user','likes')->paginate(20);

//        dd($posts);
        return view('posts.index', ['posts' => $posts]);
//        OR
//        return view('posts.index',compact('posts', $posts));

    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'body' => 'required'
        ]);

        $request->user()->posts()->create($request->only('body'));
//  OR - SAME FN ABOVE DOES THE SAME AS BELOW USING $request->only('')
        /*        $request->user()->posts()->create([
                   'body' => $request->body
                ]);
        */
        return back();
    }

    public function destroy(Post $post)
    {

        $this->authorize('delete', $post);

        $post->delete();

        return back();

    }
}
