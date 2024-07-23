<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function subjects()
    {
        return $this->belongsTo('App\Models\Subject');
    }
    public function teacher()
    {
        return $this->hasOne('App\Models\Teacher');
    }
}

