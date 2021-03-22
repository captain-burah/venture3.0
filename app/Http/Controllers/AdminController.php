<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Session;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        //$this->middleware('api');
    }

    public function dashboard(){
        return view('admin.master');
    }

    
}
