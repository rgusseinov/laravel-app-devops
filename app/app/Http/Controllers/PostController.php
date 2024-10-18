<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function show($id){
        $post = Post::find($id);

        if (!$post){
            abort(404);
        }

        return view('posts.show', compact('post'));
    }
}