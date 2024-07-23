<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public function course()
    {
        return $this->hasOne('App\Models\Course');
    }
    public function subjects()
    {
        return $this->hasMany('App\Models\Subject');
    }

  
}
