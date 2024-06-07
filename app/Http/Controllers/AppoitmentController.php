<?php

namespace App\Http\Controllers;

use App\Models\Appoitment;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\DiagnosticCenters;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Log;

class AppoitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appoitment::with('patient')->orderBy('id', 'DESC')->get();
       
        return view('admin.bookings.appointments',compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patients= Patient::all();
        $centers= DiagnosticCenters::all();
        return view('admin.bookings.add_appointment',compact('patients','centers'));
    }

    /**
     * Store a newly created resource in storage.
     */  // 'patient_id','symptoms','severity_desease','allergies','date_time','appointment_reason','appointment_type','center','notes'
  
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
        Alert::success('Appointment', 'You\'ve Successfully Booked');
        return redirect()->back();
        // Return a response
        return response()->json([
            'message' => 'Appoitment created successfully',
            'appointment' => $appoitment
        ], 201);
    }

// 'patient_id','symptoms','severity_desease','allergies','date_time','appointment_reason','appointment_type','center','notes'
    /**
     * Display the specified resource.
     */
    public function show(Appoitment $appoitment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appoitment $appoitment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appoitment $appoitment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appoitment $appoitment)
    {
        
    }
}
