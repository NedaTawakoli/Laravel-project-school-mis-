<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
    //
    protected $fillable = [
        "employee_id",
        "designation_id",
        "end_date",
        "hire_type"
    ];
    public function employee(){
        return $this->belongsTo(employee::class);
    }
    public function designation(){
        return $this->belongsTo(designation::class);
    }
}
