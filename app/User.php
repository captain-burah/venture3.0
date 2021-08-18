<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guard = 'user';

    protected $fillable = [
        'fname', 'lname', 'email', 'userType', 'password', 'regStatus'
    ]; 

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function studentInfo()
    {
        return $this->hasOne('App\StudentInfo', 'stu_email', 'email');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
