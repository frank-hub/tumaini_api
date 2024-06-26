<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appoitment;
use RealRashid\SweetAlert\Facades\Alert;

class AppoitmentController extends Controller
{
    public function index(){
        $appointments = Appoitment::with('patient')->orderBy('id', 'DESC')->get();

        return response()->json([
            'status'=> true,
            'data' => $appointments,
        ]);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'patient_id' => 'required',
            'symptoms' => 'required|string|max:255',
            'date_time' => 'required|date',
            'severity_desease' => 'required|string|max:255',
            'allergies' => 'nullable|string|max:255',
            'appointment_reason' => 'nullable|string|max:255',
            'appointment_type' => 'nullable|string|max:20',
            'center' => 'nullable|string|max:255',
            'notes' => 'nullable|string|max:255',
        ]);

        // Create a new appointment record
        $appoitment = Appoitment::create($validatedData);
        // Return a response
        return response()->json([
            'message' => 'Appoitment created successfully',
            'appointment' => $appoitment
        ], 201);
    }
}
