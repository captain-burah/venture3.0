<?php

use Illuminate\Http\Request;
use App\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();    
// });

// Route::middleware('auth:api')->get('/admin', function (Request $request) {
//     return $request->admin();    
// });

// Route::middleware('auth:api')->get('/exampapers', function (Request $request) {
//     return $request->exampapers();    
// });

// //--------- This is for authenticated users only -----------------
//     Route::group(['middleware' => 'auth:api'], function() {
//         Route::apiResources([
//             'user'=> 'API\UserController',
//             'exampapers'=> 'API\ExamPapers',
//             'admin'=> 'API\StorageController',
            
//         ]);
//         Route::get('profile', 'API\UserController@profile');
//         Route::put('profile', 'API\UserController@updateProfile');
//         Route::apiResources([
//             'storage' => 'API\StorageController',
//             'enroll' => 'API\StudentEnrollController',
//             'staffinfo' => 'API\StaffInfoController',
//             'subdomaininfo' => 'API\SubDomainInfoController',
//         ]);
//     });
//--------- This is for authenticated users only -----------------
Route::get('storage', 'API\StorageController@index');
Route::post('login_admin', 'API\Admin\AdminAuthController@admin_login2');
Route::apiResource('academies', 'Api\AcademicController')->only(['index', 'show']);

// Route::post('create-payment', function() {
//     return "create-payment working";
// });
// Route::post('create-payment', function(Request $request) {
//     return "execute-payment working";
// });

Route::prefix('/user')->group( function() {
    Route::post('/login', 'Auth\LoginController@userLogin');
    Route::post('/logout', 'Auth\LoginController@logout');
    Route::post('/register', 'Auth\RegisterController@createUser');
    Route::get('/all', 'API\UserController@index');
    Route::get('academies/{academy}/checkout', 'API\AcademicCheckoutController')->name('academies.checkout.show');
    Route::post('payment', 'API\PaymentApprove@index');
    Route::post('paymentCheck', 'API\PaymentApprove@check');
    Route::get('mycourses/{userId}', 'API\PaymentApprove@mycourses');
    Route::apiResource('academies', 'API\AcademicController')->only(['index', 'show']);

    Route::post('course-details', 'API\AcademicController@course')->name('course.details');

    // Route::post('test_route', function(Request $request) {
    //     $target = User::with('courses')->findOrFail($request['userId']);
    //     dd($target->courses[0]);
    // });
});

Route::prefix('/tutor')->group( function() {
    Route::post('/login', 'Auth\LoginController@lecLogin');
    Route::post('/register', 'Auth\RegisterController@createLec');
    Route::middleware('auth:lecturer_api')
        ->get('/all', 'API\TutorController@index');
});