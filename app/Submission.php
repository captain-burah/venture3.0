<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    public function lesson()
   {
       return $this->belongsTo(Lesson::class);
   }

   public function user()
   {
       return $this->belongsTo(User::class);
   }

   public function quiz()
   {
       return $this->belongsTo(Quiz::class);
   }

   public function exam()
   {
       return $this->belongsTo(Exam::class);
   }

   public function assignment()
   {
       return $this->belongsTo(Assignment::class);
   }
}
