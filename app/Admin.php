<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $guard = 'admin';

    protected $fillable = 
    [
        'fname', 'lname', 'email', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];
}
 