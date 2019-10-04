<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    /**
     * @var string
     */
    protected $table = 'pages';
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var bool
     */
    public $timestamps = true;

    protected $fillable = ['title', 'slug', 'content', 'order', 'created_at', 'updated_at'];

    public function scopeTitle($query, $request)
    {
        if ($request->has('title')) {
            $query->where('title', 'LIKE', '%' . $request->title . '%');
        }

        return $query;
    }
}
