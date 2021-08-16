<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function course()
   {
       return $this->belongsTo(Course::class);
   }

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
    
    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
}
