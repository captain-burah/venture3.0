<?php

namespace App\Http\Controllers\API;

use App\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcademicCheckoutController extends Controller
{
    public function __invoke($id, Request $request)
    {
        $academic = Course::findOrFail($id);
        
        return $academic;
    }
}
