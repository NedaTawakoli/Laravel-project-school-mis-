<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class designation extends Model
{
    //
    protected $fillable = [
        "name",
        "department_id",
    ];
    public function departments(){
        return $this->belongsTo(department::class);
    }
    public function employee(){
        return $this->hasMany(employee::class);
    }
    public function contract(){
        return $this->hasMany(contract::class);
    }
}
