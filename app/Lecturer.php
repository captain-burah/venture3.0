<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable; 
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Authenticatable
{
    use HasApiTokens, Notifiable;
    protected $guard = 'tutor';
    protected $fillable = [
        'fname', 'lname', 'email', 'password', 'regStatus', 'gender'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ]; 

    //public function lecturerInfo()
    //{
    //    return $this->hasOne('App\LecturerInfo', 'lec_email', 'email');
    //}

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
