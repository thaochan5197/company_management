<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
     /**
     * @var string
     */
    protected $table = 'employees';
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var bool
     */
    public $timestamps = true;

    protected $fillable = ['name', 'mail', 'phone', 'agency_id', 'position_id', 'manager_id', 'created_at', 'updated_at'];

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }
    public function employees()
    {
        return $this->hasMany(Employees::class, 'manager_id', 'id');
    }
    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function scopePosition($query, $request)
    {
        if ($request->has('position_id')) {
            $query->where('position_id',$request->position_id);
        }

        return $query;
    }

    public function scopePhone($query, $request)
    {
        if ($request->has('phone')) {
            $query->where('phone', $request->phone);
        }

        return $query;
    }

    public function scopeAgency($query, $request)
    {
        if ($request->has('agency_id')) {
            $query->where('agency_id', $request->agency_id);
        }

        return $query;
    }

    public function scopeName($query, $request)
    {
        if ($request->has('name')) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
        }

        return $query;
    }
    public function scopeMail($query, $request)
    {
        if ($request->has('mail')) {
            $query->where('mail', 'LIKE', '%' . $request->mail . '%');
        }

        return $query;
    }
}
