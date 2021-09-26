<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public function lesson()
   {
       return $this->belongsTo(Lesson::class);
   }

   public function lecturer()
   {
       return $this->belongsTo(Lecturer::class);
   }
}
