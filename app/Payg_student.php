<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Payg_student extends Model
{
    
    use HasApiTokens, Notifiable;
    
    protected $table = 'payg_students';
    protected $fillable = 
    [
        'desc', 'price'
    ];
}
