<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use App\User;

/**
 * Class Blog.
 *
 * @package namespace App\Entities;
 */
class Blog extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['content', 'title', 'slug'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function setSlugAttribute()
    {
        $this->attributes['slug'] = str_slug($this->title);
    }
}
