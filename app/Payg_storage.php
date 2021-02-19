<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payg_storage extends Model
{
    protected $table = 'payg_storages';
    protected $fillable = 
    [
        'desc', 'price'
    ];
}
