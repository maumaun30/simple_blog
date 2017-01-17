<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use Image;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'title' => 'required|max:100|unique:posts,title',
            'subtitle' => 'required|max:100',
            'body' => 'required',
            'image' => 'required|mimes:jpeg,png,gif',
            ]);

        if ($request->hasFile('image')) {
            $file_name = time() . '.' . $request->file('image')->getClientOriginalExtension();
            Image::make($request->file('image'))->save(public_path('img/uploads/' . $file_name));
            Image::make($request->file('image'))->resize(600,400)->save(public_path('img/uploads/thumbnails' . $file_name));            
        }

        $post = new Post;
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->body = $request->body;
        $post->image = $file_name;
        $post->save();

        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
