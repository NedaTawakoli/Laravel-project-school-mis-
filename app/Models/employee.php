<?php

namespace App\Models;

use Faker\Provider\Payment;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    //
    protected $fillable = [
        "firstName",
        "lastName",
        "tazkira",
        "gender",
        "phone_number",
        "designation_id",
        "email",
    ];
    public function designation(){
        return $this->belongsTo(designation::class);
    }
    public function contracts(){
        return $this->hasMany(contract::class);
    }
    public function salaries(){
        return $this->hasMany(salary::class);
    }
    public function payment(){
        return $this->hasMany(Payment::class);
    }
}
