<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function welcome() {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('welcome')->with('posts',$posts);
    }
}
