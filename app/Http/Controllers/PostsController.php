<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use auth;

class PostsController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth')->;
    }


    public function index()
    {
           $Posts = Post::latest()->get();
        return view('posts.posts',compact('Posts'));
    }

    public function create()
    {
        
        return view('posts.create');
    }

    public function store(Request $request)
    {
         $this->validate($request,
        [
        'title' => 'required|unique:posts|max:255',
        'body' => 'required',
        ]);
         $user = $request->user()->id;

        $post = new Post();

        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = $user;

        $post->save();

        return redirect('/posts');
    }


    public function show(Post $post)
    {
        $comments = $post->comments;
        // dd($comments);
        return view('posts.show',compact('post','comments'));
    }
    

    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }


    public function update(Request $request, Post $post)
    {
        // $post = Post::findOrFail($id);

    $this->validate($request, [
        'title' => 'required',
        'body' => 'required'
    ]);
     


    $input = $request->all();
    $input["user_id"] = Auth::id();
    $post = Post::find($input["post_id"]);
    $post->title= $input["title"] ;
    $post->body = $input["body"];

    $post->save();

   // $PostEdit = ['body' => $input["body"] , 'title' => $input["title"] ,'user_id'=> auth::id()];
    //$updatePost = Post::find($post->id)->update($PostEdit);
    // $updateOrder = Post::where()update($post->id, $input);
    // $post->update($input,$post);


    // Session::flash('flash_message', 'post successfully editted!');

    return redirect('/posts');

    }


    public function destroy(post $post)
    {
        //
    }
}
