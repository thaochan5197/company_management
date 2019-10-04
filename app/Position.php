<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    /**
     * @var string
     */
    protected $table = 'position';
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var bool
     */
    public $timestamps = true;

    protected $fillable = ['name', 'manager_id', 'created_at', 'updated_at'];

    public function manager()
    {
        return $this->belongsTo(Position::class, 'manager_id');
    }
}
