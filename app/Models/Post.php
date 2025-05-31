<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Post extends Model
{
    protected $table = 'my_posts';

    // protected $fillable = ['title', 'content', 'image'];
    protected $guarded = [];


    // accessor

    // $post->path_image
    function getPathImageAttribute()
    {
        $src = asset('uploads/no-image-available.webp');

        if ($this->image && File::exists(public_path($this->image))) {
            $src = asset($this->image);
        }

        return $src;
    }

    function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
