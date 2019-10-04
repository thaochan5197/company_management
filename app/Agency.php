<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    /**
     * @var string
     */
    protected $table = 'agency';
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var bool
     */
    public $timestamps = true;

    protected $fillable = ['name', 'mail', 'phone','created_at', 'updated_at'];

    public function employees()
    {
        return $this->hasMany(Employees::class);
    }
}
