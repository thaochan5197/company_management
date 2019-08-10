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
    
    /**
     * @param array $where
     * @return Category[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getResult($where = [])
    {
        $query = $this->where($where)
                ->get()->toArray();
        return $query;
    }
    
    /**
     * @param $select
     * @param $where
     * @return Category|Model|null
     */
    public function getInfo($select, $where)
    {
        return $this->select($select)
            ->where($where)
            ->first();
    }
    
    /**
     * @param $where
     * @param $data
     * @return bool
     */
    public function updateInfo($where, $data)
    {
        return $this->where($where)
            ->update($data);
    }
    
}
