<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }
    
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }   
}
