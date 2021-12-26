<?php

use App\Http\Controllers\API\V1\StorageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/application/info', function () {
    return phpinfo();
});

Route::get('/file/open/{fileID}/{streamType}', [StorageController::class, 'openFile']);

// Route::get('/file/test-stream', function () {
//     $file = public_path('/storage/user/assignment/logo.png');
//     $mimes = mime_content_type($file);

//     if (file_exists($file)) {
//         // header('Content-Description: File Transfer');
//         header('Content-Type: ' . $mimes);
//         // header('Content-Disposition: attachment; filename="'.basename($file).'"');
//         header('Expires: 0');
//         header('Cache-Control: must-revalidate');
//         header('Pragma: public');
//         header('Content-Length: ' . filesize($file));
//         readfile($file);
//         exit;
//     }
// });
