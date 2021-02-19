<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payg_student extends Model
{
    protected $table = 'payg_students';
    protected $fillable = 
    [
        'desc', 'price'
    ];
}
