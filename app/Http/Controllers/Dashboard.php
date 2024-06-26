<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiskAssessment;
use App\Models\Patient;
use App\Models\DiagnosticCenters;

class Dashboard extends Controller
{
    public function index(){

        $patientC = Patient::count();
        $centers = DiagnosticCenters::count();
        $ristCount = RiskAssessment::count();
        // dd($patientC);
        $genders = [
            'Male',
            'Female',
            'Other'
        ];
        $genderCounts = RiskAssessment::whereIn('gender', $genders)
            ->select('gender', \DB::raw('count(*) as total'))
            ->groupBy('gender')
            ->get()
            ->pluck('total', 'gender')
            ->toArray();

        // Ensure all counties are present in the array
        foreach ($genders as $gender) {
            if (!isset($genderCounts[$gender])) {
                $genderCounts[$gender] = 0;
            }
        }
        return view('admin.index', ['genderCounts' => $genderCounts],compact('patientC',
        'centers',
        'ristCount'
    ));
    }
}
