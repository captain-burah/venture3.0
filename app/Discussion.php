<?php

namespace App;


use App\Channel;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $fillable = [
        'channel_id', 'lecturer_id', 'user_id', 'name', 'content'
    ];

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

   public function replies()
    {
        return $this->belongsToMany(Reply::class);
    }
}
