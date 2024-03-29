<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| 
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => ['setlocale', 'web']], function() {

    //---------------------- Newly Declared routes based on laravel inbuilt authentication system-----------------------
        Route::get('/', function(){
            return view('landing');
        })->name('landing-page');
        Auth::routes();
        Route::get('/tutor_registration', 'Auth\RegisterController@showlecRegisterForm')->name('tutor-regForm');
        Route::post('/tutor/register', 'Auth\RegisterController@createLec')->name('tutor-regSubmit');

        Route::get('/login/tutor', 'Auth\LoginController@showlecLoginForm')->name('tutor-loginForm');
        Route::post('/tutor/login', 'Auth\LoginController@lecLogin')->name('tutor-LogSubmit');

        Route::post('/student/login', 'Auth\LoginController@userLogin')->name('student-logSubmit');

        Route::get('/testPage', 'Lecturer\LecturerController@test');
        Route::get('/about_us', 'HomeController@aboutUs')->name('about_us');
        Route::get('/pay-as-you-go', 'HomeController@payg')->name('payg');
        
        

    //---------------------- Newly Declared routes based on laravel inbuilt authentication system----------------------->






    //---------------------- Tutor Register Routes ----------------------->
    Route::get('/createEstimate', 'HomeController@estimate')->name('create-estimate');
    Route::get('/free_plan', 'HomeController@free_plan')->name('tutor-free_plan');
    Route::get('/pay_as_you_go', 'HomeController@pay_as_you_go')->name('tutor-pay_as_you_go');
    Route::get('/beginner_plan', 'HomeController@beginner_plan')->name('tutor-beginner_plan');
    Route::get('/professional_plan', 'HomeController@professional_plan')->name('tutor-professional_plan');
    Route::get('/master_plan', 'HomeController@master_plan')->name('tutor-master_plan');
    //---------------------- Tutor Register Routes ----------------------->






    //--------------------------- Home Routes Auths------------------------------------------------->
        Route::get('/home', 'HomeController@index')->name('home-guest-auth');
        Route::get('/home_tutor', 'Lecturer\LecturerController@home_tutor')->name('home-tutor-auth');
        

        Route::get('/tutors', 'HomeController@JoinAsTutor')->name('home-student-auth');
        Route::get('/landing', function () {
            return view('landing');
        });
    //--------------------------- /Home Routes Auths------------------------------------------------>






    //--------------------------- Test Routes ------------------------------------------------>
        Route::get('/tester', function(){
            return view('test');
        });






    //--------------------------- Academy Routes Auths------------------------------------------------->
        //Route::get('/landing', 'HomeController@Landing')->name('landing'); //------- Home Page
        //------- Student Sign-Up uses laravel default /register route---//

        //------- Student Log-In uses laravel default /login route---//

        //------- Tutor Sign Up
                //Route::get('/tutor_registration', function(){
                //    return view('/tutorReg');
                //});

        //------- Tutor Login
        Route::get('/tutor_login', function(){
            return view('/tutorLog'); 
        });


        Route::get('/welcome', function(){ 
            return view('/welcome');
        });
    //--------------------------- /Academy Routes Auths------------------------------------------------->





    //--------------------------- /Error URLs------------------------------------------------------->
        Route::get('/404', function()
        {   $message = 'error fdsajdkf';
            return view('errors.404', compact('message'));
        });

        Route::get('/test', 'Lecturer\LecturerController@error');
    //--------------------------- /Error URLs------------------------------------------------------->
    




    //--------------------------- Dashboard Routes------------------------------------------------>
        Route::get('/student_dashboard', 'Student\StudentController@dashboard')->name('student-home');
        Route::get('/tutor', 'Lecturer\LecturerController@dashboard')->name('tutor-home');
        //Route::get('/tutor_registered', 'Lecturer\LecturerController@registered')->name('tutor-registered');
    //--------------------------- /Dashboard Routes------------------------------------------------>





    //Route::view('/join_tutor', 'lecturer.Lregister');
    //Route::post('/tutor_register', 'Lecturer\LecturerController@store');
    //Route::post('tutor_register', 'Lecturer\LecturerController@store')->name('tutor-register');
    //Route::post('tutor_logout', 'Auth\LoginController@lecLogOut')->name('tutor-logout');
    
    Route::middleware(['auth:lecturer'])->group(function () {
        
        Route::get('/tutor_setup', function () {              //---- Loading of the step page
            return view('lecturer.setup.lecSetup');     //---- This is controlled by App/Exceptions/Handler.php
        })->name('tutor-setupPage');

        Route::get('/home_tutor', 'Lecturer\LecturerController@home_tutor')->name('home-tutor-auth:lecturer');
        Route::post('/setup_finish', 'Lecturer\LecturerController@setupSubmit')->name('Tsetup-Submit');
        //Route::get('/testPage', 'Lecturer\LecturerController@test');
    
    });

    Route::middleware(['auth:user'])->group(function () {
        
        
        Route::get('/home_student', 'Student\StudentController@home_student')->name('home-student-auth');
        //Route::get('/testPage', 'Lecturer\LecturerController@test');
    
    });






    
    //---------------------------- Group: Student Auths------------------------------------------------------->
    Route::middleware(['auth'])->group(function() {
        Route::get('/student_setup', function () {              //---- Loading of the step page
            return view('lecturer.setup.lecSetup');     //---- This is controlled by App/Exceptions/Handler.php
        })->name('student-setupPage');
    });
    //--------------------------- /Group: Student Auths------------------------------------------------------->


    

});






    //--------------------------- Admin Routes------------------------------------------------>
    Route::prefix('admin')->group(function(){
        Route::get('/', 'Auth\Admin\AdminLoginController@admin')->name('admin-login-view');
        Route::post('/admin', 'Auth\Admin\AdminLoginController@admin_login')->name('admin-login');
        
        Route::get('/admin_reg', 'Auth\RegisterController@admin_view_reg')->name('admin-register-view');
        Route::post('/admin_reg', 'Auth\RegisterController@admin_register')->name('admin-register');

        Route::post('/admin_logout', 'Auth\Admin\AdminLoginController@admin_logout')->name('admin.logout');
        Route::get('/dashboard', 'AdminController@dashboard')->name('admin-dash');    
    }); 
     

    Route::middleware(['auth:admin'])->group(function () {
        
    });
//--------------------------- Admin Routes------------------------------------------------>









//--------------------------------------------------------------------------------------------
//Route::get('{path}','Student\StudentController@index')->where( 'path', '([A-z\d\-\/_.]+)?' );
//Route::get('{path}','Lecturer\LecturerController@index')->where( 'path', '([A-z\d\-\/_.]+)?' );
//Route::get('{path}','Lecturer\LecturerController@dashboard')->where( 'path', '([A-z\d\-\/_.]+)?' );

Route::group(['prefix' => 'academy/{any}', 'where' => ['any' => '^(?!api\/)[\/\w\.\,-]*']], function(){

    Route::get('/', function(){
        return view('academy');
    })->name('academy');

    
    Route::get('/academy/{id}', function($id){
        return view('academic', [ 'id' => $id ]);
    })->name('academic');
});




Route::get('{path}','HomeController@index')->where( 'path', '([A-z\d\-\/_.]+)?' );
Route::get('/admin/{path}','AdminController@dashboard')->where( 'path', '([A-z\d\-\/_.]+)?' );