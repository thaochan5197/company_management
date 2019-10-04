<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * @var string
     */
    protected $table = 'realty_info';
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
    public function getResult($select = '*', $where = [], $join = [])
    {
        if (!empty($join)) {
            $this->join($join['join_with'], $this->table . '.' . $join['this_field'], "=", $join['join_with'] . '.' . $join['that_field']);
        }
        $this->select($select)
            ->where($where);
        return $this->get()->toArray();
    }

    /**
     * @param $select
     * @param $where
     * @return Category|Model|null
     */
    public function getInfo($select = [], $where = [])
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
