<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Session;
use Illuminate\Support\Facades\DB;
use App\Lecturer;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
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
        return app()->getLocale() . '/login';
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
    } 

    public function logout(Request $request)
    {
        $this->guard('lecturer')->logout();

        $request->session()->invalidate();

        return redirect( app()->getLocale() . '/login');
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
            $getArray = Lecturer::select('regStatus')->where('email', $request->email)->first();

            if ($getArray->regStatus == 'false') {
                //redirect to SETUP page
                return redirect(app()->getLocale() . '/setup');
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


    public function userLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::guard()->attempt([
            'email' => $request->email, 
            'password' => $request->password], $request->get('remember'))) 
            { 
            try 
            {
                //read the database attributes userType & regStatus from database
                $getArray = User::select('userType', 'regStatus')->where('email', $request->email)->first();
            } 
            catch (\Exception $exception)
            {
                //catch any errors while reading database
                $message1 = '500';
                $message2 = 'Faulty Database';
                $message3 = 'Failled to validate user '.$request->email;
                return view('errors.notFound', compact('message1', 'message2', 'message3'));
            }

            //check if USER is a STUDENT or TUTOR
            if ($getArray->userType == 'student') {

                //check if STUDENT has completed submission form
                if ($getArray->regStatus == 'false') {

                    //redirect to TUTOR setup page
                    return redirect(app()->getLocale() . '/setup')->with('userType', ['student']);
                }
                //redirect to STUDENT Dashboard page
                return redirect(app()->getLocale() . '/student_dashboard');
            } 
            elseif ($getArray->userType == 'tutor') {
                //check if TUTOR has completed submission form
                if ($getArray->regStatus == 'false') {

                    //redirect to TUTOR setup page
                    return redirect(app()->getLocale() . '/setup')->with('userType', ['tutor']);
                }
                //redirect to TUTOR Dashboard page
                return redirect(app()->getLocale() . '/tutor');
            } 
            else {
                $message1 = '404';
                $message2 = 'Something went really wrong!';
                $message3 = 'User Authenticated. Condition loop-back failled. User: '.$request->email;
                return view('errors.notFound', compact('message1', 'message2', 'message3'));
            };
        }
        return back()->withInput($request->only('email', 'remember'));
    }
 
}
