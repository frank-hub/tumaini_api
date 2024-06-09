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
        $counties = [
            'Kisumu',
            'Baringo',
            'Bomet',
            'Bungoma',
            'Busia',
            'Elgeyo Marakwet',
            'Embu',
            'Garissa',
            'Homa Bay',
            'Isiolo',
            'Kajiado',
            'Kakamega',
            'Kericho',
            'Kiambu',
            'Kilifi',
            'Kirinyaga',
            'Kisii',
            'Kitui',
            'Kwale',
            'Laikipia',
            'Lamu',
            'Machakos',
            'Makueni',
            'Mandera',
            'Meru',
            'Migori',
            'Marsabit',
            'Mombasa',
            'Muranga',
            'Nairobi',
            'Nakuru',
            'Nandi',
            'Narok',
            'Nyamira',
            'Nyandarua',
            'Nyeri',
            'Samburu',
            'Siaya',
            'Taita Taveta',
            'Tana River',
            'Tharaka Nithi',
            'Trans Nzoia',
            'Turkana',
            'Uasin Gishu',
            'Vihiga',
            'Wajir',
            'Pokot'
        ];
        $patientCounts = RiskAssessment::whereIn('county', $counties)
            ->select('county', \DB::raw('count(*) as total'))
            ->groupBy('county')
            ->get()
            ->pluck('total', 'county')
            ->toArray();

        // Ensure all counties are present in the array
        foreach ($counties as $county) {
            if (!isset($patientCounts[$county])) {
                $patientCounts[$county] = 0;
            }
        }
        return view('admin.index', ['patientCounts' => $patientCounts],compact('patientC',
        'centers',
        'ristCount'
    ));
    }
}
