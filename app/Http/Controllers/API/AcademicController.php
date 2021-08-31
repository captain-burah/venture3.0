<?php

namespace App\Http\Controllers\API;

use App\Course;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
}
