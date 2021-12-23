<?php

namespace App\Http\Controllers\API\V1;

use App\Models\CourseModule;
use Illuminate\Http\Request;
use App\Models\ModuleAssignment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\ModuleUserAssignmentCollection;

class CourseModuleController extends Controller
{
    public function getAll(Request $request)
    {
        // $isActive = request('isActive') == true ? 1 : 0;

        $modules = CourseModule::where(['idCourse' => request('courseID'), 'idSession' => request('sessionID')]);

        if (request('moduleType')) {
            $modules = $modules->where('moduleType', request('moduleType'));
        }
        // if (request('isActive')) {
        //     $modules = $modules->where('isActive', request('isActive'));
        // }

        $modules = $modules->get();

        if (request('withContent') == 'true') {
            $modules->map(function ($d) {
                $this->_mapCourseModuleData($d, $d->moduleType);
            });
        }

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

    public function submitAssignment(Request $request)
    {
        $getAssignmentData = ModuleAssignment::where('idModule', $request->moduleID)->first();

        $validation = Validator::make($request->all(), [
            'idCourse'        => 'required|numeric',
            'idSession'          => 'required|numeric',
            'attachment' => 'required|max:20000|mimes:' . implode(",", $getAssignmentData->extensions)
        ]);

        if ($validation->fails()) {
            return response()->json([
                'status' => "error",
                "errors" => $validation->errors()
            ], 422);
        }

        $fullPath = 'user/assignment/' . $request->file('attachment')->getClientOriginalName();

        Storage::putFileAs(
            'user/assignment', $request->file('attachment'),  $request->file('attachment')->getClientOriginalName()
        );
        
        ModuleUserAssignmentCollection::create([
            "idUser" => $request->user()->userID,
            "idCourse" => $request->idCourse,
            "idSession" => $request->idSession,
            "idModule" => $request->moduleID,
            "path" => $fullPath
        ]);

        // set score logic here =================

        return response()->json([
            "status"    => "success",
            "message" => "Assignment has been uploaded, please wait for scoring from your lectures",
            "meta"   => $request->file('attachment')->getClientOriginalName()
        ], 201);
    }

    public function deleteAssignment(Request $request)
    {
        $getAssignmentData = ModuleUserAssignmentCollection::where(['idUser' => $request->user()->userID, 'idModule' => $request->moduleID])->first();
        ModuleUserAssignmentCollection::where(['idUser' => $request->user()->userID, 'idModule' => $request->moduleID])->delete();

        // set logic if score has been filled, cannot delete file ===================

        Storage::delete($getAssignmentData->path);

        return response()->json([
            "status"    => "success",
            "message" => "Assignment has been deleted",
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
