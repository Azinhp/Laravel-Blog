<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function DeletePost(Post $post){
        $post->delete();
        return redirect("profile");
    }

    public function UpdatePost(Request $request, Post $post){
        $Data = $request->validate([
            "title"=> "required",
            "content"=> "required",
        ]);

        $Data['title'] = strip_tags($Data['title']);
        $Data['content'] = strip_tags($Data['content']);

        $post->update($Data);
        return redirect('/profile');
    }
    
    public function EditPost(Post $post){
        return view('edit-post',['post' => $post]);
    }
    public function CreatPost(Request $request){
        $Data = $request->validate([
            "title"=> "required",
            "content"=> "required",
        ]);
        $Data['title'] = strip_tags($Data['title']);
        $Data['content'] = strip_tags($Data['content']);
        $Data['user_id'] = auth()->id();
        Post::create($Data);

        return redirect('profile');
    }
}
