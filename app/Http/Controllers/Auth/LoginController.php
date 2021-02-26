<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Session;
use App\Admin;
use App\Lecturer;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers; 

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/login';

    public function redirectTo()
    {
        return app()->getLocale() . '/';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:lecturer')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    } 

    public function lec_logout(Request $request)
    {
        $this->guard('lecturer')->logout();

        $request->session()->invalidate();

        return redirect( app()->getLocale() . '/login');
    }






    public function admin_logout(Request $request)
    {
        $this->guard('admin')->logout();
        
        $request->session()->invalidate();

        return redirect()->route('/admin', app()->getLocale());
    }




//------------------ Tutor Login Form -----------------------
    public function showLecLoginForm()
    {
        return view('auth.login', ['url' => '/tutor']);
        //return view('auth.login', ['url' => '/tutor']);
    }

//------------------ Tutor Login -----------------------
    public function lecLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::guard('lecturer')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            
            //we must validate the "tutor setup page" here before displaying
            //the "dashboard" with an if clause accessing the DB lec table column name "regStatus"
            try 
            {
                //read the database attributes userType & regStatus from database
                $getArray = Lecturer::select('regStatus')->where('email', $request->email)->first();
            } 
            catch (\Exception $exception)
            {
                //catch any errors while retrieving regStatus
                $message1 = '500';
                $message2 = 'Faulty Server Script';
                $message3 = 'Failled to retrieve registration status of '.$request->email;
                return view('errors.notFound', compact('message1', 'message2', 'message3'));
            }

            if ($getArray->regStatus == 'false') {
                //redirect to SETUP page
                return redirect(app()->getLocale() . '/tutor_setup');
            } 
            elseif ($getArray->regStatus == 'true') {
                //redirect to TUTOR DASHBOARD page
                return redirect(app()->getLocale() .'/tutor');
            } 
            else {
                return 'something wrong in "regStatus" page load';
            };
            
            //return redirect('/tutor');
        }
        return back()->withInput($request->only('email', 'remember'));
    }






//------------------ Student Login -----------------------
    public function userLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:8'
        ]);
        //check who is trynna log-in
        if (Auth::guard()->attempt([
            'email' => $request->email, 
            'password' => $request->password], $request->get('remember'))) 
        {
            try 
            {
                //read the database attributes userType & regStatus from database
                $studentStatus = User::select('regStatus')->where('email', $request->email)->first();
            } 
            catch (\Exception $exception)
            {
                //catch any errors while retrieving regStatus
                $message1 = '500';
                $message2 = 'Faulty Server Script';
                $message3 = 'Failled to retrieve registration status of '.$request->email;
                return view('errors.notFound', compact('message1', 'message2', 'message3'));
            }

            //check if STUDENT has completed submission form
            if ($studentStatus->regStatus == 'false') {

                //redirect to STUDENT setup page
                return redirect(app()->getLocale() . '/setup')->with('userType', ['student']);
            }
            elseif ($studentStatus->regStatus == 'true') {

                //redirect to STUDENT Dashboard page
                return redirect(app()->getLocale() . '/student_dashboard');
            } 
            else {

                //catch any errors while retrieving regStatus
                $message1 = '500';
                $message2 = 'Faulty Server Script';
                $message3 = 'Registration status in DB has been altered. User '.$request->email;
                return view('errors.notFound', compact('message1', 'message2', 'message3'));
            };
        } else {
            return back()->withInput($request->only('email', 'remember'));
        }
            
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