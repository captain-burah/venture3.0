<?php

namespace App\Http\Controllers\API;

use App\Course;
use App\User;
use App\Lesson;

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
        $target = new AcademicShowResource(Course::with('lessons')->findOrFail($request['cid']));
        $exam = [];
        foreach($target->lessons as $subQuery => $key)
        {
            $target2 = new AcademicShowResource(Lesson::with('exams')->findOrFail($target->lessons[$subQuery]->id));
            array_push($exam, $target2);
        }
        return response([
            'lessons' => $target->lessons,
            'exams' => $exam,
        ]);
    }

    public function exams(Request $request)
    {

    }
}
