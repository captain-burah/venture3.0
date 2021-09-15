<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    protected $guard = 'user';
    protected $fillable = [
        'fname', 'lname', 'email', 'userType', 'password', 'regStatus'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function courses()
    {
        return $this->belongsToMany(Course::class,'course_user', 'user_id', 'course_id')
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

    public function studentInfo()
    {
        return $this->hasOne('App\StudentInfo', 'stu_email', 'email');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
