<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    public function lecturers()
    {
        return $this->belongsToMany(Lecturer::class, 'lecturer_subscription', 'subscription_id', 'lecturer_id')
            ->withTimeStamps()    
            ->withPivot([
                'tx_id',
                'tx_status',
                'tx_payee_fname',
                'tx_payee_lname',
                'tx_payer_id',
                'tx_currency_code',
                'tx_amount',
                'tx_payee_email',
                'tx_payee_merchant_id',
            ]);
    }
}
