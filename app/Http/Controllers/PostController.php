<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = Post::orderBy('id','DESC')->get();
        return view('index', [
            'posts' => $posts
        ]);

    }
}
