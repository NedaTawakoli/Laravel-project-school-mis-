<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class salary extends Model
{
    //
    protected $fillable = [
        "payroll_id",
        "employee_id",
        "gross_salary",
    ];
    public function employee(){
        return $this->belongsTo(employee::class);
    }
    public function payroll(){
        return $this->belongsTo(payroll::class);
    }
}
