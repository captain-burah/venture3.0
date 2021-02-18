<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

//---------------- Index----------------------
    public function index()
    {
        return view('home');
    }

    public function JoinAsTutor()
    {
        return view('joinAsTutor');
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function payg(){
        return view('payg');
    }

    //public function Landing(){
    //    return view('joinAsTutor');
    //}

    public function Landing2(){
        return view('landing', ['url' => '/student']);
    }
    public function Landing3(){
        return view('landing', ['url' => '/tutors']);
    }

//------------- Tutor Registration Package -------------
    public function free_plan(){
        $plan = 'free';
        return view('auth.register', [
            'url' => '/tutor',
            'plan' => 'free'
        ])->with($plan);
    }

    public function pay_as_you_go(){
        $plan = 'pay_as_you_go';
        return view('auth.register', [
            'url' => '/tutor', 
            'plan' => 'pay_as_you_go'
        ])->with($plan);
    }

    public function beginner_plan(){
        $plan = 'beginner_plan';
        return view('auth.register', [
            'url' => '/tutor', 
            'plan' => 'beginner_plan'
        ])->with($plan);
    }

    public function professional_plan(){
        $plan = 'professional_plan';
        return view('auth.register', [
            'url' => '/tutor', 
            'plan' => 'professional_plan'
        ])->with($plan);
    }

    public function master_plan(){
        $plan = 'master_plan';
        return view('auth.register', [
            'url' => '/tutor', 
            'plan' => 'master_plan'
        ])->with($plan);
    }
}
