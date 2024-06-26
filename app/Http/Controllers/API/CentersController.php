<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DiagnosticCenters;

class CentersController extends Controller
{
    public function index(){
        $centers = DiagnosticCenters::orderby('id','desc')->get();

        return response()->json([
            'status' => true,
            'centers' => $centers,
            'message' => 'Fetched Successfully'
        ]);
    }
}
