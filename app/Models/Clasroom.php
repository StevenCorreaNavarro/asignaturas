<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasroom extends Model
{
    use HasFactory;
    public function subjects()
    {
        return $this->belongsToMany('App\Models\Subject');
    }
}
