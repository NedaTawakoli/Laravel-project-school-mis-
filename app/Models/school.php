<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class school extends Model
{
    //
    protected $fillable = [
        "name",
        "whatsApp_Number",
        "facebook_Link",
    ];
    public function users(){
        return $this->belongsTo(school::class,"schoolusers");
    }
    public function departments(){
        return $this->hasMany(department::class);
    }
    public function designation(){
        return $this->through("departments")->has("designation");
    }
    public function payrool(){
        return $this->hasMany(payroll::class);
    }
    public function user(){
        return $this->belongsTo(User::class,'schoolusers');
    }
    public function designation(){
        return $this->through("departments")->has("designation");
    }

}
