<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staffs';
    protected $fillable = ['name','age','gender','position_id','department_id'];

    function position(){
        return $this->belongsTo(Position::class);
    }
    function department(){
        return $this->belongsTo(Department::class);
    }
    function user(){
        return $this->hasOne(User::class);
    }
    function scopeGetStaff($query,$department_id){
        return $query->where('position_id', '<>', '2')
                    ->where('department_id',$department_id);
    }
}
