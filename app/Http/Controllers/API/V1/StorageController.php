<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\StorageFile;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    public function openFile(Request $request)
    {
        $fileID = $request->fileID;
        $streamType = $request->streamType;

        $getFileFromDB = StorageFile::where('fileID', $fileID)->first();

        $file = public_path('storage/' . $getFileFromDB->path);
        $mimes = $getFileFromDB->mimes;

        if (file_exists($file)) {
            // header('Content-Description: File Transfer');
            header('Content-Type: ' . $mimes);
            // header('Content-Disposition: attachment; filename="'.basename($file).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            exit;
        }
    }
}
