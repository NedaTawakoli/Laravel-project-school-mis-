<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    //
    protected $fillable = [
        "payment_method",
        "employee_id",
        "amount",
        "payroll_id",
        "payment_date",
    ];
}
