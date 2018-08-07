<?php

namespace App\Http\Controllers\Traits;

use App\Entities\Blog;


trait BlogTrait
{
    public function postBlog($data, $user)
    {
        $data = array_merge(
            $data,
            ['slug' => str_slug($data['title'])]
        );

        $blog = Blog::make($data);
        $blog->user()->associate($user)
            ->save();

        return $blog;
    }
}
