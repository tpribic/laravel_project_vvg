<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobtype extends Model
{
    protected $fillable = ['jobtype_name'];

    public function jobs()
    {
        return $this->hasMany(\App\Job::class);
    }
}
