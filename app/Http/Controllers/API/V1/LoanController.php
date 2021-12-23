<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\LabToolLoan;
use App\Models\LibBookLoan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function getLoansLibBook(Request $request)
    {
        $loans = LibBookLoan::where('idUser', $request->user()->userID);

        if (request('isFinished')) {
            $loans = $loans->where('isFinished', request('isFinished') == 'true' ? 1 : 0);
        }

        $loans = $loans->get();

        $loans->map(function($d)
        {
            $d->book;
        });

        return response()->json([
            "status"    => "success",
            "data"   => $loans
        ], 200);
    }

    public function getLoansLabTool(Request $request)
    {
        $loans = LabToolLoan::where('idUser', $request->user()->userID);

        if (request('isFinished')) {
            $loans = $loans->where('isFinished', request('isFinished') == 'true' ? 1 : 0);
        }

        $loans = $loans->get();

        $loans->map(function($d)
        {
            $d->tool;
        });

        return response()->json([
            "status"    => "success",
            "data"   => $loans
        ], 200);
    }
}
