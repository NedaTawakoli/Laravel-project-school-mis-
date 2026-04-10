<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    //
    protected $fillable = [
        "name",
        "school_id",
    ];
  public function designation(){
    return $this->hasMany(designation::class);
  }
  public function school(){
    return $this->belongsTo(school::class);
  }
  public function employees(){
    return $this->through("designation")->has('employees');
    // return $this->hasManyThrough(employee::class,designation::class);
  }
}
