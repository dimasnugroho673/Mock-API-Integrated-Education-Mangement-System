<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseModule;
use App\Models\CourseUserEnroll;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function myCourse(Request $request)
    {
        // $courses = CourseUserEnroll::where('idUser', $request->user()->userID)->get();
        $courses = Course::join('course_users_enroll', 'course_users_enroll.idCourse', 'courses.courseID')
            ->where('course_users_enroll.idUser', $request->user()->userID)
            ->get();

        $courses->map(function ($d) {
            $d->session;
            $d->session->room;
            $d->session->lectures;
            $d->session->lectures = $d->session->lectures->map(function($l)
            {
                $l->lecture;
            });
            $d->academicYear;

            return $d;
        });

        return response()->json([
            "status"    => "success",
            "data"   => $courses
        ], 200);
    }

    public function getAll(Request $request)
    {
        $courses = Course::all();

        $courses->map(function($d) {
            $d->sessions = $d->sessions->map(function($s)
            {
                $s->lectures->map(function($l)
                {
                    $l->lecture;
                });
                $s->room;
            });
            $d->department->faculty;
            $d->academicYear;

            return $d;
        });

        return response()->json([
            "status"    => "success",
            "data"   => $courses
        ], 200);
    }

    public function getDetail(Request $request)
    {
        $course = Course::where('courseID', $request->courseID)->first();
        $backUpDataAcademic = $course->academicYear;
        unset($course->academicYear);

        $course->session;
        $course->session->room;
        $course->session->lectures->map(function($lecture)
        {
            $lecture->lecture;
        });
        $course->department;
        $course->academicYear = $backUpDataAcademic;
        $course->session->dataCounter = [
            "material" => count(CourseModule::where('moduleType', 'material')->get()),
            "assignment" => count(CourseModule::where('moduleType', 'assignment')->get()),
            "quiz" => count(CourseModule::where('moduleType', 'quiz')->get()),
            "exam" => count(CourseModule::where('moduleType', 'exam')->get())
        ];

        return response()->json([
            "status"    => "success",
            "data"   => $course
        ], 200);
    }

    public function createStudyPlan(Request $request)
    {
        foreach ($request->courses as $d) {
            CourseUserEnroll::create(
                [
                    "idUser" => $request->user()->userID,
                    "idCourse" => $d['idCourse'],
                    "idSession" => $d['idSession']
                ]
            );
        }

        return response()->json([
            "status"    => "success",
            "message" => "Study Plan has been created",
            "meta"   => $request->courses
        ], 201);
    }

    private function _mapCourseData($d)
    {
        $d->course = $d->course->session;
        // $d->courseSession;

        return $d;
    }
}
