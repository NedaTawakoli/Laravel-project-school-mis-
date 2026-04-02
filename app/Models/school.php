<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
