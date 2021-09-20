<?php

namespace App\Http\Controllers\API;

use App\Course;
use App\User;
use App\Lesson;
use App\Quiz;
use App\Exam;
use App\Assignment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;

use App\Http\Resources\AcademicIndexResource;
use App\Http\Resources\AcademicShowResource;

class AcademicController extends Controller
{
    public function index()
    {
        return AcademicIndexResource::collection(
            Course::all()
        );
    }

    
    public function show($courseId)
    {
        return new AcademicShowResource(Course::findOrFail($courseId));
    }


    public function course(Request $request) 
    {
        $target0 = new AcademicShowResource(User::with('courses')->findOrFail($request['uid']));
        foreach ($target0->courses as $subQuery =>$key)
            {
                if ( $target0->courses[$subQuery]->pivot->course_id == $request['cid'] )
                {
                    $course = $target0->courses[$subQuery];
                    $regTime = $target0->courses[$subQuery]->pivot->created_at->format('Y-m-d H:i:s');
                    $target1 = new AcademicShowResource(Course::with('lessons')->findOrFail($request['cid']));
                    $exam = [];
                    $quiz = [];
                    $assignment = [];
                    foreach($target1->lessons as $subQuery => $key)
                    {
                        $target2 = new AcademicShowResource(Lesson::with('exams')->findOrFail($target1->lessons[$subQuery]->id));
                        array_push($exam, $target2);

                        $target3 = new AcademicShowResource(Lesson::with('quizzes')->findOrFail($target1->lessons[$subQuery]->id));
                        array_push($quiz, $target3);

                        $target4 = new AcademicShowResource(Lesson::with('assignments')->findOrFail($target1->lessons[$subQuery]->id));
                        array_push($assignment, $target4);
                    }
                    return response([
                        'regTime' => $regTime,
                        'course' => $course,
                        'lessons' => $target1->lessons,
                        'exams' => $exam,
                        'quizzes' => $quiz,
                        'assignments' => $assignment,
                    ]);
                }
            }
    }
}
