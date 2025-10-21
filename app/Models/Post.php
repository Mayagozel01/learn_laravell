<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use SoftDeletes;
    
    // protected $fillable = [
    //     'title',
    //     'content',
    //     'likes',
    //     'is_published',
    // ];  
    protected $table = 'posts';
    protected $guarded = [];
}
