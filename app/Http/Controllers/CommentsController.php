<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
    }

    public function create()
    {
    
    }

    public function store(Post $post)
    {
        // $this->validate($request,
        // [
        // 'body' => 'required',
        // ]);

        // $comment = new Comment();
        // $comment->body = $request->body;
        // $comment->user_id = $request->user()->id;
        // $comment->post_id = $request->post;
        //     // dd($comment);   
        // $comment->save();
        

        $post->addComment($post);
        
        // dd($request);
        // dd($post->toArray());
        

        // Comment::create([
        //     'body' => $request->body ,
        //     'post_id' => $request->post_id,
        //     'user_id' => $request->user()->id
        // ]);
        // dd($post);
        // Comment::create([
        //     'body' => request('body') ,
        //     'post_id' => $post->id ,
        //     'user_id' => $post->user_id
        // ]);


        return back();
    }


    public function show(Comment $comment)
    {
        //
    }

   
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
