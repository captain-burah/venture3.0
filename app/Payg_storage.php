<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Payg_storage extends Model
{
    
    use HasApiTokens, Notifiable;
    
    protected $table = 'payg_storages';
    protected $fillable = 
    [
        'desc', 'price'
    ];
}
