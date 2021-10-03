<?php

namespace App\Http\Controllers\API;

use App\Lesson;
use App\Lecturer;
use App\Course;
use App\Subscription;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Resources\TutorCourseLessonResource;

class TutorController extends Controller
{
    public function tutor($id)
    {
        $target = Lecturer::findOrFail($id);
        return response([
            'data'=>$target
        ]);
    }
 
    public function mylessons(Request $request) 
    {
        $target = new TutorCourseLessonResource(Course::with('lecturer')->where('lecturer_id', $request->lecturerId)->get());
        // return response([
        //     'status' => $request->lecturerId,
        // ]);
        if (!$target->isEmpty()) 
        {
            return response([
                'lessons' => $target[0]->lecturer,
                'status' => 'success'
            ]);
        }
        else
        {
            return response([
                'lessons' => $target,
                'status' => 'null'
            ]);
        };
    }

    public function subscriptions(Request $request) 
    {
        $target = Lecturer::with('subscriptions')->find($request['lecturerId']);
        $subscription = $target->subscriptions[count($target->subscriptions) - 1];
        return response([
            'time' => $subscription->pivot->created_at->diffForHumans(),
            'precise' => $subscription->pivot->created_at->format('Y-m-d H:i:s'),
            'subscriptions' => $subscription,
            // 'name' => $subscription->name,
            // 'price' => $subscription->price,
            // 'duration' => $subscription->duration,
            // 'students' => $subscription->students,
            // 'storage' => $subscription->storage,
        ]);
    }



    public function subscribe(Request $request) 
    {
        $target = Lecturer::with('subscriptions')->findOrFail($request['lecturerId']);
        $target->subscriptions()
            ->attach($request['subscriptionId'], 
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
        $tutor = Lecturer::findOrFail($request['lecturerId']);
        $subscription = $tutor
            ->subscriptions()
            ->withPivot('created_at')
            ->orderBy('created_at','desc')
            ->first();
        return response([
            'status' => 'Created',
            'time' => $subscription->pivot->created_at->diffForHumans(),
            'precise' => $subscription->pivot->created_at->format('Y-m-d H:i:s'),
            'name' => $subscription->name,
            'price' => $subscription->price,
            'duration' => $subscription->duration,
            'students' => $subscription->students,
            'storage' => $subscription->storage,
        ]);        
    }

    public function subscription($subscriptionId){
        $target = new TutorCourseLessonResource(Subscription::findOrFail($subscriptionId));
        return response([
            'data' => $target,
        ]);
    }

    public function payments($lecturerId){
        $target = new TutorCourseLessonResource(Lecturer::with('subscriptions')->findOrFail($lecturerId));
        return response([
            'data' => $target->subscriptions,
        ]);
    }

    public function printDetails(Request $request){
        $target = new TutorCourseLessonResource(DB::table('lecturer_subscription')->where('tx_id', $request->tx_id)->get());
        // return $target;

        $target2 = Lecturer::with('subscriptions')->find($request->tutor_id);
        return response([
            '$target' => $target,
            '$target2' => $target2->subscriptions,
        ]);
    }
}
