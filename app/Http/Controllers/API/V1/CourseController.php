<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseUserEnroll;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function myCourse(Request $request)
    {
        $courses = CourseUserEnroll::where('idUser', $request->user()->id)->get();

        $courses->map(function ($d) {
            $this->_mapCourseData($d);

            return $d;
        });

        return response()->json([
            "status"    => "success",
            "data"   => $courses
        ], 200);
    }

    private function _mapCourseData($d)
    {
        $d->course;
        $d->courseSession;

        return $d;
    }
}
