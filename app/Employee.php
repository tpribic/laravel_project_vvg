<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['employee_oib', 'employee_name', 'employee_surename', 'employee_email', 'job_id', 'office_id', 'bonus_id'];

    public function office()
    {
        return $this->belongsTo(\App\Office::class);
    }
    public function job()
    {
        return $this->belongsTo(\App\Job::class);
    }
    public function bonus()
    {
        return $this->belongsTo(\App\Bonus::class);
    }
    
}
