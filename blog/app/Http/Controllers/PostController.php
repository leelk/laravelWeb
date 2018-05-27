<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function showPost()
    {



        $posts=Post::all()->sortByDesc('id');
        return view('post',['posts'=> $posts]);
    }




    public function postCreatePost(Request $request)
    {
       $post = new Post();
       $post->title= $request['title'];
       $post->description=$request['description'];

       $request->user()->posts()->save($post);
        return redirect()->back()->with('message','Posted');




    }
}
