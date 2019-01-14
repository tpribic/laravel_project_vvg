<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    protected $fillable = ['bonus_level', 'bonus_bonus'];

    public function employees()
    {
        return $this->hasMany(\App\Employee::class);
    }
}
