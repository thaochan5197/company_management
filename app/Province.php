<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    /**
     * @var string
     */
    protected $table = 'province';
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var bool
     */
    public $timestamps = true;

    public function getResult($where = [])
    {
        $query = $this->where($where)
            ->get()->toArray();
        return $query;
    }
}
