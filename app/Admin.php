<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = 'admins';
    protected $fillable = 
    [
        'fname', 'lname', 'email', 'password'
    ];

    protected $hidden = [
        'password',
    ];
}
