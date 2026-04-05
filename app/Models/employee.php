<?php

namespace App\Models;

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
}
