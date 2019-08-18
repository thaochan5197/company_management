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

    /**
     * Get the category that owns the post.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function scopeTitle($query, $request)
    {
        if ($request->has('title')) {
            $query->where('title', 'LIKE', '%' . $request->title . '%');
        }

        return $query;
    }

    public function scopeCategory($query, $request)
    {
        if ($request->has('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        return $query;
    }

    public function scopeCreated($query, $request)
    {
        if ($request->has('created_at')) {
            $query->whereDate('created_at', '=', date('Y-m-d', strtotime($request->created_at)));
        }

        return $query;
    }
}
