<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Auth;

class HomeController extends Controller
{
    public function welcome() {
    	// dd(Auth::user()->confirmed());
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('welcome')->with('posts',$posts);
    }
}
