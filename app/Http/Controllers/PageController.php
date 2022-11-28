<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view("home");
    }

    public function blog()
    {
        // $posts = Post::get();
        $posts = Post::latest()->paginate();
        return view("blog", ["posts" => $posts]);
    }

    public function post(Post $post)
    {
        return view("post", ["post" => $post]);
    }
}
