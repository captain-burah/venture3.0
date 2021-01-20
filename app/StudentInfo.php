<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class StudentInfo extends Model
{
    protected $table = 'student_infos';
    protected $fillable = 
    [
        'stu_email', 'bio', 'gender', 'contact', 'dob', 'profession', 'experience', 
        'qualifications', 'school', 'achievements','address01', 'address02', 
        'address03', 'address04'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'stu_email');
    }
}
