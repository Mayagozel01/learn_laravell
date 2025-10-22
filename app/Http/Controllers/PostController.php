<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts', compact('posts'));
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
    public function firstOrCreate(){
        $anotherPost = ['title'=>'Second Post1', 'content'=>'22 This is the content of the second post', 'likes'=>500, 'is_published'=>0];
        $post = Post::withoutGlobalScope('softDeletes')->firstOrCreate([
            'title'=>'Second Post1'
        ],$anotherPost);
        dump($post->content);

    }
    public function updateOrCreate(){
         $anotherPost = ['title'=>'New Post 22', 'content'=>'New updated1323 This is the content of the second post', 'likes'=>500, 'is_published'=>0];
         $post = Post::updateOrCreate(['title'=>'Second Post1'],
         $anotherPost
    );
    dump($post->content);
    dd("updated or created");  
    }
}
