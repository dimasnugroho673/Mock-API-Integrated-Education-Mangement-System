<?php

use App\Http\Controllers\API\V1\AuthController;
use App\Http\Controllers\API\V1\CourseController;
use App\Http\Controllers\API\V1\CourseModuleController;
use App\Http\Controllers\API\V1\LoanController;
use App\Http\Controllers\API\V1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {

    Route::get('/login', [AuthController::class, 'login']);

    Route::middleware('auth:api')->group(function () {
        Route::get('/user/profile', [AuthController::class, 'getUserData']);
        Route::get('/user/courses', [CourseController::class, 'myCourse']);
        Route::post('/user/course', [CourseController::class, 'createStudyPlan']);
        Route::put('/user/password', [AuthController::class, 'changePassword']);

        Route::get('/courses', [CourseController::class, 'getAll']);

        Route::get('/modules', [CourseModuleController::class, 'getAll']);
        Route::get('/module/{moduleID}', [CourseModuleController::class, 'getDetail']);

        Route::get('/loans/book', [LoanController::class, 'getLoansLibBook']);
        Route::get('/loans/tool', [LoanController::class, 'getLoansLabTool']);
        
    });
});
