<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class payroll extends Model
{
    //
    protected $fillable = [
        "year",
        "month",
        "school_id",
    ];
    public function school(){
        return $this->belongsTo(school::class);
}
public function salaries(){
    return $this->hasMany(salary::class);
}
public function payment(){
    return $this->hasMany(payment::class);
}
}
