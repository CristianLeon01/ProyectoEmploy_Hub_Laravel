<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function Post (){

        $posts = Post::all();
        return view("post.index", compact("posts"));
    }
    
    public function Create(){
        return view('post.create');
    }

    public function Store(Request $request){

        Post::create($request->all());
        return redirect()->route('post');
    }

    public function Edit (Post $post){
        return view('post.edit', compact('post'));
    }


    public function Update(Request $request, Post $post){
        
        $post->update($request->all()); 
        return redirect()->route('post');
    }

    public function Show(Post $post){
        return view ('post.show', compact('post'));
    }

    public function Destroy (Request $request, Post $post){ 
        $post->delete();
        return redirect()->route('post');
    }
}
