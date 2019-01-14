<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['job_name', 'job_salary', 'jobtype_id'];

    public function employees()
    {
        return $this->hasMany(\App\Employee::class);
    }

    public function jobtypes()
    {
        return $this->belongsTo(\App\Jobtype::class);
    }
    
}
