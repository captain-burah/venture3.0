<?php

namespace App\Http\Controllers\API;

use App\Course;
use App\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Resources\AcademicPaymentResource;

class PaymentApprove extends Controller
{
    public function index(Request $request) {
        $target = new AcademicPaymentResource(User::with('courses')->findOrFail($request['userId']));
        // return $target;
        if ($target != null)
        {
            foreach ($target->courses as $subQuery =>$key)
            {
                if ( $target->courses[$subQuery]->pivot->course_id == $request['courseId'] )
                {
                    // return $target->courses[$subQuery]->pivot->course_id;
                    return response([
                        'status' => 'Exists',
                        'time' => $target->courses[$subQuery]->pivot->created_at->diffForHumans(),
                        'precise' => $target->courses[$subQuery]->pivot->created_at->format('Y-m-d H:i:s'),
                    ]);
                }
            }
            $user = User::findOrFail($request['userId']);
            $user->courses()->attach($request['courseId'], 
            [
                'tx_id' => $request['tx_id'],
                'tx_status' => $request['tx_status'],
                'tx_payee_fname' => $request['tx_payee_fname'],
                'tx_payee_lname' => $request['tx_payee_lname'],
                'tx_payer_id' => $request['tx_payer_id'],
                'tx_currency_code' => $request['tx_currency_code'],
                'tx_amount' => $request['tx_amount'],
                'tx_payee_email' => $request['tx_payee_email'],
                'tx_payee_merchant_id' => $request['tx_payee_merchant_id'],
            ]);
            $target = new AcademicPaymentResource(User::with('courses')->findOrFail($request['userId']));
            foreach ($target->courses as $subQuery => $key){
                if ( $target->courses[$subQuery]->pivot->course_id == $request['courseId']){
                    return response([
                        'status' => 'Success',
                        'time' => $target->courses[$subQuery]->pivot->created_at->format('Y-m-d H:i:s'),
                    ]);
                }
            }
        }
    }

    public function check(Request $request) {
        $target = new AcademicPaymentResource(User::with('courses')->findOrFail($request['userId']));
        if ($target != null)
        {
            foreach ($target as $query) {
                foreach ($query->courses as $subQuery => $key) {
                    if ( $query->courses[$subQuery]->pivot->course_id == $request['courseId'])
                    {
                        // return $query->courses[$subQuery];
                        return response([
                            'status' => 'Exists',
                            'time' => $query->courses[$subQuery]->pivot->created_at->diffForHumans(),
                            'precise' => $query->courses[$subQuery]->pivot->created_at->format('Y-m-d H:i:s'),
                        ]);
                    }
                }
                return response([
                    'status' => 'Clear',
                ]);
            }
        }
    }


    public function mycourses($userId)
    {
        $target = new AcademicPaymentResource(User::with('courses')->findOrFail($userId));
        return response([
            'data' => $target,
        ]);
    }




        // if (User::with('courses')->findOrFail($request['userId'])) {
            
        //     $targets = new AcademicPaymentResource(User::with('courses')->findOrFail($request['userId']));
        //     $courses = $targets->courses;
        //     foreach ($courses as $target ) {
                // 
        //         return $courses[$target];
        //     }

        //     // if ($target->courses[0]->pivot->course_id == $request['courseId']) {
        //     //     return 'Already Exists';
        //     // }else {
        //     //     // return $target->courses[0]->pivot->created_at->format('Y-m-d H:i:s');
        //     //     // return 'not exist';
                
        //     //       
                
        //     //     $targetUpdate = new AcademicPaymentResource(User::with('courses')->findOrFail($request['userId']));
        //     //     return $targetUpdate->courses;
        //     // }
        // }
        // else {
        //     return 'user doesnt exists.';
        // };

    
        

        // // return new AcademicPaymentResource(Course::with('users')->finOrFail($request['userId']));
        // return new AcademicPaymentResource(User::with('courses')->findOrFail($request['userId']));
    
}
