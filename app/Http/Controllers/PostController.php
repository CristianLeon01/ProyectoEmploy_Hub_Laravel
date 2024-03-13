<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
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

    public function Store(PostRequest $request){

        $post = new Post($request->validated());
        $post->save();
        return redirect('post')->with('success', 'Cargo creado exitosamente');
    }

    public function Edit (Post $post){
        return view('post.edit', compact('post'));
    }


    public function Update(PostRequest $request, Post $post){
        
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
