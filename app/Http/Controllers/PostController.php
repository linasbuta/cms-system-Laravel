<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
//use Illuminate\Contracts\Session\Session;

class PostController extends Controller
{
    //
    public function show(Post $post){
       
        return view('blog-post', ['post' => $post]);
    }

    public function create(){
         return view('admin.posts.create');
        
    }
    public function store(){

      $inputs =  request()->validate([
            'title' => 'required| min:8| max:255',
            'short' => 'required| min:8',
            'body' => 'required| min:8',
           



        ]);    
       auth()->user()->posts()->create($inputs);
       session()->flash('Create-post-message', 'Post was Create');

     return redirect()->route('post.index');;
    }

    public function index(){
    
      $posts = auth()->user()->posts;
         return view('admin.posts.index', ['posts' => $posts]);
    }

    public function destroy(Post $post){
        $post->delete();
        session()->flash('Delete-post-message', 'Post was Deleted');
        return redirect()->route('post.index');
    }

     public function edit(Post $post){
       
        return view('admin.posts.edit', ['post' => $post]);

     }

     public function update(Post $post){
        $inputs =  request()->validate([
            'title' => 'required| min:8| max:255',
            'short' => 'required| min:8',
            'body' => 'required| min:8'

        ]);   
        $post->title = $inputs['title'];
        $post->short = $inputs['short'];
        $post->body = $inputs['body'];
        
     
       $post->save();
       return redirect()->route('post.index');
     }

    public function approved($post){
       $result = Post::findOrFail($post);

       if($result->apprpved === 'yes'){

        $result->update(array('apprpved' => 'no'));
        return redirect()->route('post.index');
       }else{
        $result->update(array('apprpved' => 'yes'));
        return redirect()->route('post.index');
       }

    }

    
}
