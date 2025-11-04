<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller; 

use App\Http\Requests\Post\UpdateRequest;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post){  
        $data = $request->validated();
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }
}
