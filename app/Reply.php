<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = [
        'discussion_id', 'lecturer_id', 'user_id', 'content'
    ];

    public function discussion()
    {
        return $this->belongsTo(Discussion::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }
}
