<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\CourseModule;
use Illuminate\Http\Request;

class CourseModuleController extends Controller
{
    public function getAll(Request $request)
    {
        $modules = CourseModule::where(['idCourse' => request('courseID'), 'idSession' => request('sessionID')])->get();

        return response()->json([
            "status"    => "success",
            "data"   => $modules
        ], 200);
    }

    public function getDetail(Request $request)
    {
        $module = CourseModule::where('moduleID', $request->moduleID)->first();

        if ($module->isActive) {
            $this->_mapCourseModuleData($module, $module->moduleType);
        } else {
            unset($module->data);
        }

        return response()->json([
            "status"    => "success",
            "data"   => $module
        ], 200);
    }

    private function _mapCourseModuleData($d, $moduleType)
    {
        switch ($moduleType) {
            case 'material':
                $backupDataMaterial = $d->moduleMaterial;

                unset($d->moduleMaterial);

                $d->content = $backupDataMaterial;

                return $d;
                break;

            case 'assignment':
                $backupDataAssignment = $d->moduleAssignment;

                unset($d->moduleAssignment);

                $d->content = $backupDataAssignment;

                return $d;
                break;

            case 'quiz':
                unset($d->moduleQuiz->id);

                $backupData = $d->moduleQuiz;
                
                $d->content = $backupData;
                $backupDataQuiz = $d->content->data;

                foreach ($backupDataQuiz as $i) {
                    unset($i->answerKey);
                }

                unset($d->moduleQuiz);
                unset($d->content->data);

                $d->content->data = json_encode($backupDataQuiz);
                
                return $d;
                break;

            case 'exam':
                return $d->moduleExam;
                break;

            default:
                return $d;
                break;
        }
    }
}
