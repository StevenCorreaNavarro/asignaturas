<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    public function students()
    {
        return $this->belongsToMany('App\Models\Student');
    }
    public function clasrooms()
    {
        return $this->belongsToMany('App\Models\Clasroom');
    }
    public function course()
    {
        return $this->hasMany('App\Models\Course');
    }
    public function teacher()
    {
        return $this->belongsTo('App\Models\teacher');
    }
}
