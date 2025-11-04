<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\PostTag;
use App\Http\Controllers\Controller; 


use App\Http\Requests\Post\StoreRequest;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        $tags = $data['tags'];
        unset($data['tags']);
        $post = Post::firstOrCreate($data);

    //     foreach ($tags as $tag){
    //     PostTag::create([
    //         'tag_id'=>$tag,
    //         'post_id'=>$post->id,
    //     ]);
    // }shuna derek ashaky setiri yazmaly. Bu Post modeldaki shu metodyn barlygy un chagyryp bolyar public function tags(){
    
      $post->tags()->attach($tags);
        return redirect()->route('post.index');
    }
}
