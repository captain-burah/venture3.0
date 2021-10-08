<?php

use Illuminate\Http\Request;
use App\User;

Route::get('storage', 'API\StorageController@index');
Route::post('login_admin', 'API\Admin\AdminAuthController@admin_login2');
Route::apiResource('academies', 'Api\AcademicController')->only(['index', 'show']);

//------  Forum -------------
    Route::get('discussions', 'API\DiscussionController@index');
    Route::get('discussions/{id}', 'API\DiscussionController@discussion');
    Route::get('tuDiscussions/{lid}', 'API\DiscussionController@tutorDiscussion');
    Route::get('stuDiscussions/{uid}', 'API\DiscussionController@userDiscussion');
    Route::get('replies/{did}', 'API\ReplyController@index');
    Route::get('channels', 'API\DiscussionController@channels');
    Route::post('filterDiscussion', 'API\DiscussionController@filterDiscussion');

    //------  Forum - Discussion  -------------
    Route::post('createDiscussion', 'API\DiscussionController@createDiscussion');
    Route::post('updateDiscussion', 'API\DiscussionController@updateDiscussion');
    Route::post('deleteDiscussion', 'API\DiscussionController@deleteDiscussion');

    //------  Forum - Reply  -------------
    Route::post('createReply', 'API\ReplyController@createReply');
    Route::post('updateReply', 'API\ReplyController@updateReply');
    Route::post('deleteReply', 'API\ReplyController@deleteReply');
//------//  Forum -------------



Route::prefix('/user')->group( function() {
    Route::get('fetch/{id}', 'API\UserController@user');
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
    Route::post('/logout', 'Auth\LoginController@logout');
    Route::middleware('auth:lecturer_api')
        ->get('/all', 'API\TutorController@index');
    Route::get('fetch/{id}', 'API\TutorController@tutor');
    Route::post('/lessons', 'API\TutorController@mylessons');
    Route::post('/subscriptions', 'API\TutorController@subscriptions');
    Route::post('/subscribe', 'API\TutorController@subscribe');
    Route::get('/subscription/{subscriptionId}', 'API\TutorController@subscription');
    Route::get('/payments/{lecturerId}', 'API\TutorController@payments');
    Route::post('/print-subscription', 'API\TutorController@printDetails');

});