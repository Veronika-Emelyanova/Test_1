<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


    public function index() {
        $posts = Post::oldest()->get();

        return view('news.index', compact('posts'));
    }
    public function index_app() {

        $posts = Post::latest()->limit(3)->get();

        $posts[0]->content = (explode(".", $posts[0]->content))[0];
        $posts[1]->content = (explode(".", $posts[1]->content))[0];
        $posts[2]->content = (explode(".", $posts[2]->content))[0];

        return view('app', compact('posts'));
    }

    public function show(Post $post){
        return view('news.show', compact('post'));
    }

}
