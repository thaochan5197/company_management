<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * @var string
     */
    protected $table = 'posts';
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var bool
     */
    public $timestamps = true;

    protected $fillable = ['title', 'slug', 'summary', 'category', 'status', 'content', 'order', 'created_at', 'updated_at'];

    public function scopeTitle($query, $request)
    {
        if ($request->has('title')) {
            $query->where('title', 'LIKE', '%' . $request->title . '%');
        }

        return $query;
    }
}
