<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payg_subdomain extends Model
{
    protected $table = 'payg_subdomains';
    protected $fillable = 
    [
        'desc', 'price'
    ];
}
