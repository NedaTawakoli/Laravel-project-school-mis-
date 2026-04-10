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
    public function employee(){
     return $this->belongsTo(employee::class);
    }
    public function payroll(){
        return $this->belongsTo(payroll::class);
    }
}
