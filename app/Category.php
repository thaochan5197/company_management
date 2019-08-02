<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * @var string
     */
    protected $table = 'category';
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var bool
     */
    public $timestamps = true;

    public function getResult($where)
    {
        return $this->where($where)
            ->get();
    }

    public function getInfo($select, $where)
    {
        return $this->select($select)
            ->where($where)
            ->first();
    }
}
