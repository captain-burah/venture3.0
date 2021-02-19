<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payg_staff extends Model
{
    protected $table = 'payg_staffs';
    protected $fillable = 
    [
        'desc', 'price'
    ];
}
