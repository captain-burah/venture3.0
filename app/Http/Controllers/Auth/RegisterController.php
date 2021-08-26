<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Admin;
use App\Lecturer;
use App\LecturerInfo;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    
    protected $redirectTo = '/student_dashboard';
    
    public function redirectTo()
    {
        return app()->getLocale() . '/student_dashboard';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:lecturer');
    }

    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        
        return Validator::make($data, [
            'fname'  => 'required|string|max:191',
            'lname'  => 'required|string|max:191',
            'email'  => 'required|string|email|max:191|unique:lecturers',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required| min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


    


    //--------------- Tutor Controllers ----------------
        public function showLecRegisterForm()
        {
            return view('auth.register', ['url' => '/tutor', 'plan' => 'free']);
        }
        

        protected function createLec(Request $request)
        {
            $validate = $this->validate($request, [
                'fname'  => 'required|string|max:191',
                'lname'  => 'required|string|max:191',
                'email'  => 'required|string|email|max:191|unique:lecturers',
                'password' => 'required|string|min:6',
                //'privacyPolicy' => 'required|string',
            ]);
            if ($validate == true){
                try{
                    return Lecturer::create([
                        'fname' => $request['fname'],
                        'lname' => $request['lname'],
                        'email' => $request['email'],
                        'password' => Hash::make($request['password']),
                        
                    ]);
                } catch (\Exception $exception) {
                    $message = 'Failled to create a new database record for '.$request->email;
                    return view('errors.notFound', compact('message'));
                }

                //$user = new LecturerInfo();
                //$user->lec_email = $request['email'];
                //$user->gender = $request['gender'];
                //$user->push();
                // return redirect(app()->getLocale() . '/login/tutor');
            }
        //Else statement not required, Laravel redirects USER back with flash messages
        }
    //--------------- Tutor Controllers ----------------

    //--------------- User Registration ---------------
    protected function createUser(Request $request)
        {
            $validate = $this->validate($request, [
                'fname'  => 'required|string|max:191',
                'lname'  => 'required|string|max:191',
                'email'  => 'required|string|email|max:191|unique:users',
                'password' => 'required|string|min:6',
                //'privacyPolicy' => 'required|string',
            ]);
            if ($validate == true){
                try{
                    return User::create([
                        'fname' => $request['fname'],
                        'lname' => $request['lname'],
                        'email' => $request['email'],
                        'password' => Hash::make($request['password']),
                        
                    ]);
                } catch (\Exception $exception) {
                    $message = 'Failled to create a new database record for '.$request->email;
                    return view('errors.notFound', compact('message'));
                }

                //$user = new LecturerInfo();
                //$user->lec_email = $request['email'];
                //$user->gender = $request['gender'];
                //$user->push();
                // return redirect(app()->getLocale() . '/login/tutor');
            }
        //Else statement not required, Laravel redirects USER back with flash messages
        } 
    //--------------- User Registration ---------------





    //--------------- Admin Controllers ----------------
        public function admin_view_reg()
        {
            return view('auth.registerAdmin');
        }
        

        protected function admin_register(Request $request)
        {
            $validate = $this->validate($request, [
                'fname'  => 'required|string|max:191',
                'lname'  => 'required|string|max:191',
                'email'  => 'required|string|email|max:191|unique:admins',
                'password' => 'required|string|min:6|confirmed',
                'password_confirmation' => 'required| min:6',
                //'privacyPolicy' => 'required|string',
            ]);
            if ($validate == true){
                try{
                    Admin::create([
                        'fname' => $request['fname'],
                        'lname' => $request['lname'],
                        'email' => $request['email'],
                        'password' => Hash::make($request['password']),
                    ]);
                } catch (\Exception $exception) {
                    //catch any errors while retrieving regStatus
                    $message1 = '500';
                    $message2 = 'Faulty Server Script';
                    $message3 = 'Failled to create database query of '.$request->email;
                    return view('errors.notFound', compact('message1', 'message2', 'message3'));
                }
                //$user = new LecturerInfo();
                //$user->lec_email = $request['email'];
                //$user->gender = $request['gender'];
                //$user->push();
                
                //return redirect(app()->getLocale() . '/admin');
                return redirect()->route('admin-login-view', app()->getLocale());
            }
        //Else statement not required, Laravel redirects USER back with flash messages
        }
    //--------------- Admin Controllers ----------------
}
