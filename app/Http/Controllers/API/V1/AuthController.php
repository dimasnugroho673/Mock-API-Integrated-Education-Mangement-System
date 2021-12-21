<?php

namespace App\Http\Controllers\API\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'nim'              => 'required|numeric',
            'passwd'          => 'required|min:4',
        ]);

        if ($validation->fails()) {
            return response()->json([
                'status' => "error",
                "errors" => $validation->errors()
            ], 422);
        }

        $getEmailByNIM = User::where('nim', $request->nim)->first()->email;

        if (Auth::attempt(['email' => $getEmailByNIM, 'password' => $request->passwd])) {
            $userData = $request->user();

            return response()->json([
                "message"    => "success",
                "key"      => $userData->api_token
            ], 200);
        }

        return response()->json([
            "status"    => "error",
            "message"   => "Something wrong"
        ], 401); 
    }

    public function getUserData(Request $request)
    {
        $userData = $request->user();

        return response()->json([
            "status"    => "success",
            "data"      => $userData
        ], 200);
    }
}
