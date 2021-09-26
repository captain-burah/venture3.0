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
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Resources\TutorCourseLessonResource;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Lecturer::latest()->paginate(10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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

    public function subscribe(Request $request) 
    {
        $target = new TutorCourseLessonResource(Lecturer::with('subscriptions')->findOrFail($request['lecturerId']));
        return $target;
    }
}
