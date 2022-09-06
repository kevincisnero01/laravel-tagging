<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::orderBy('id','DESC')->get();
        return view('index', [
            'posts' => $posts
        ]);

    }

    public function store(PostRequest $request)
    {   
        $tags = explode(',', $request->tags);
        $post = Post::create(request()->all());
        $post->tag($tags);

        return back()->with('info', 'Post creado');
    }
}
