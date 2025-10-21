<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::find(1);
        dd($post->title);
    }

    public function create()
    {
        $postsArr =[
            ['title'=>'First Post', 'content'=>'This is the content of the first post', 'likes'=>10, 'is_published'=>1],
            ['title'=>'Second Post', 'content'=>'This is the content of the second post', 'likes'=>5, 'is_published'=>0],
            ['title'=>'Third Post', 'content'=>'This is the content of the third post', 'likes'=>8, 'is_published'=>1],
        ];
        Post::create($postsArr[0]);
        dump("Post created");
        foreach($postsArr as $postData){
            dump( $postData);
            Post::create($postData);
        }
        dd("Posts created");
    }
    public function update()
    {
        $post = Post::find(2);
        dump("Before update: ".$post->title." with ".$post->likes." likes");
        $post->title = "Updated Second Post";
        $post->likes = 15;
        $post->save();
        dd("Post updated");
    }
    public function delete()
    {
        $post = Post::find(3);
        $post->delete();
        dd("Post deleted");
    }   
}
