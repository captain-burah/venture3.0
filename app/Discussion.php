<?php

namespace App;


use App\Channel;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    public function lecturer()
   {
       return $this->belongsTo(Lecturer::class);
   }

   public function user()
   {
       return $this->belongsTo(User::class);
   }

   public function channel()
   {
       return $this->belongsTo(Channel::class);
   }
}
