<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RealtyPost extends Model
{
    /**
     * @var string
     */
    protected $table = 'realty_post';
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var bool
     */
    public $timestamps = true;
}
