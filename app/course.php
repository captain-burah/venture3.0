<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }
    
    public function lessons()
    {   
        return $this->hasMany(Lesson::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'course_user', 'course_id', 'user_id')
            ->withTimeStamps()
            ->withPivot([
                'tx_id',
                'tx_status',
                'tx_create_time',
                'tx_update_time',
                'tx_fname',
                'tx_lname',
                'tx_payer_id',
                'tx_currency_code',
                'tx_amount',
                'tx_payee_email',
                'tx_payee_merchant_id',
            ]);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
