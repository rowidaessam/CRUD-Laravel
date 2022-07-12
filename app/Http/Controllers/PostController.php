<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
     }

    function index(){
        // $posts = [
        //     "title1" => "post1", "body"=> "description1", 
        //     "title2" => "post2", "body"=> "description2", 
        //     "title3" => "post3", "body"=> "description3", 
        //     "title4" => "post4", "body"=> "description4", 
        //   ];
        $posts = Post::all();
        return view('posts.posts', ["posts" => $posts]);
    }
    function show($id){
        $post = new Post;
        $post = $post->findorfail($id);
        // dd($post);
        return view('posts.show' , ["myposts" => $post]);
    }

    function home(){
        $num = 50;
        $posts = [
            "title1" => "post1", "body"=> "description1", 
            "title2" => "post2", "body"=> "description2", 
            "title3" => "post3", "body"=> "description3", 
            "title4" => "post4", "body"=> "description4", 
          ]; 
        return view('home', ["posts" => $posts, "num" => $num ]);
    }


    function create(){
        return view("posts.create");
    }

    function  store(){
        // dd(request("title"));
        $post = new Post; // new post 
        $post->title = request("title");
        $post->description = request("description");
        $post->save();
        return redirect("/posts");
    }

    function edit($id){
        $post = new Post;
        $post = $post->findorfail($id);
        return view("posts.edit", ["myposts" => $post]);
    }

    function update($id){
        $post = new Post;
        $post = $post->findorfail($id);
         //dd(request()->all());
        $post->title = request("title");
        $post->description = request("description");
        $post->save();
        return redirect("/posts");
    }

    function destroy($id){
        $post = new Post;
        $post = $post->findorfail($id);
        $post->delete();
        return redirect("/posts");

    }



    
}
