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

    public function users()
    {
        return $this->belongsToMany(User::class, 'course_user', 'course_id', 'user_id')->withTimeStamps();
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
