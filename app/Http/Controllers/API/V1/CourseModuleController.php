<?php

namespace App\Http\Controllers\API\V1;

use App\Models\CourseModule;
use Illuminate\Http\Request;
use App\Models\ModuleAssignment;
use App\Http\Controllers\Controller;
use App\Models\ModuleQuiz;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\ModuleUserAssignmentCollection;
use App\Models\ModuleUserScore;
use App\Models\StorageFile;

class CourseModuleController extends Controller
{
    public function getAll(Request $request)
    {
        // $isActive = request('isActive') == true ? 1 : 0;

        $modules = CourseModule::where(['idCourse' => request('courseID'), 'idSession' => request('sessionID')]);

        if (request('moduleType') && request('moduleType') != 'all') {
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

    public function submitQuiz(Request $request)
    {
        $totalTrueAnswers = 0;
        $getQuizData = ModuleQuiz::where('idModule', $request->moduleID)->first();

        foreach ($request->answers as $a) {
            if ($this->_searchAnswerKeyByNumber($a, $getQuizData->data)) {
                $totalTrueAnswers += 1;
            } else {
                if ($totalTrueAnswers >= 1) {
                    $totalTrueAnswers -= 1;
                } else {
                    $totalTrueAnswers = 0;
                }      
            }
        }
        
        return response()->json([
            "status"    => "success",
            "dataFromDB"   => $getQuizData->data,
            "totalTrueAnswers" => $totalTrueAnswers
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

        $createOnStorageFile = StorageFile::create([
            'fileName' => $request->file('attachment')->getClientOriginalName(),
            'mimes' => $request->file('attachment')->getMimeType(),
            'size' => $request->file('attachment')->getSize(),
            'extension' => $request->file('attachment')->getClientOriginalExtension(),
            'path' => $fullPath
        ]);

        Storage::putFileAs(
            'user/assignment', $request->file('attachment'),  $request->file('attachment')->getClientOriginalName()
        );
        
        ModuleUserAssignmentCollection::create([
            "idUser" => $request->user()->userID,
            "idCourse" => $request->idCourse,
            "idSession" => $request->idSession,
            "idModule" => $request->moduleID,
            "idFile" => $createOnStorageFile->fileID
            // "path" => $fullPath
        ]);

        // set score logic here =================
        ModuleUserScore::create([
            "idUser" => $request->user()->userID,
            "idCourse" => $request->idCourse,
            "idSession" => $request->idSession,
            "idModule" => $request->moduleID,
            "moduleScore" => 100,
            "moduleGrade" => transformScoreToGrade(100)
        ]);

        return response()->json([
            "status"    => "success",
            "message" => "Assignment has been uploaded, please wait for scoring from your lectures",
            "meta"   => [
                "score" => [
                    "moduleScore" => 100,
                    "moduleGrade" => transformScoreToGrade(100)
                ]
            ]
        ], 201);
    }

    public function deleteAssignment(Request $request)
    {
        $getAssignmentData = ModuleUserAssignmentCollection::where(['idUser' => $request->user()->userID, 'idModule' => $request->moduleID])->first();
        $getFilePath = StorageFile::where('fileID', $getAssignmentData->idFile)->first();
        ModuleUserAssignmentCollection::where(['idUser' => $request->user()->userID, 'idModule' => $request->moduleID])->delete();

        // set logic if score has been filled, cannot delete file ===================

        StorageFile::where('fileID', $getAssignmentData->idFile)->delete();

        Storage::delete($getFilePath->path);

        return response()->json([
            "status"    => "success",
            "message" => "Assignment has been deleted",
        ], 200);
    }

    private function _searchAnswerKeyByNumber($answerDataFromUser, $answerDataFromDB)
    {
        foreach ($answerDataFromDB as $a) {
            if ($answerDataFromUser['number'] == $a->number) {
                if ($answerDataFromUser['choice'] == $a->answerKey) {
                    return true;
                } else {
                    return false;
                }
            }
        }
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
                $backupSubmitted = $d->moduleAssignment->submittedAssignment;

                unset($d->moduleAssignment);

                $d->content = $backupDataAssignment;
                $d->content->submittedAssignment = $backupSubmitted;
                if ($d->content->submittedAssignment) {
                    $d->content->submittedAssignment->file = $backupSubmitted->file;
                }

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
