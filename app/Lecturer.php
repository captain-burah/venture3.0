<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable; 
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Authenticatable
{
    use HasApiTokens, Notifiable;
    protected $guard = 'tutor';
    protected $fillable = [
        'fname', 'lname', 'email', 'password', 'regStatus', 'gender'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ]; 

    public function subscriptions()
    {
        return $this->belongsToMany(Subscription::class, 'lecturer_subscription', 'lecturer_id', 'subscription_id')
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

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }
}
