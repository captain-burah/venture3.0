<?php

namespace App\Http\Controllers\Auth\Admin;

use Auth;
use Session;
use App\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminLoginController extends Controller
{
    
    use AuthenticatesUsers;

     protected $redirectTo = '/admin';




     public function redirectTo()
     {
         return app()->getLocale() . '/';
     }




    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    public function admin_logout(Request $request)
    {
        $this->guard('admin')->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/admin');
    }



    //------------------ Admin Login Form -----------------------
    public function admin()
    {
        return view('auth.loginAdmin');
    }

//------------------ admin Login -----------------------
    public function admin_login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect('/admin/dashboard');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
