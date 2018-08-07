<?php

namespace App\Http\Controllers\Traits;

use App\Entities\Blog;


trait BlogTrait
{
    public function postBlog($data, $user)
    {
        $blog = Blog::make($data);
        $blog->user()->associate($user)->save();

        return $blog;
    }
}
