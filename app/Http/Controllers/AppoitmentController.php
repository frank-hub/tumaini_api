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
        return redirect('/appointment/index')->with('success', 'Appointment updated successfully');
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
    public function show($id)
    {
        $appointment = Appoitment::with('patient')->find($id);
        return view('admin.bookings.appoitment_details',compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $patients= Patient::all();
        $centers= DiagnosticCenters::all();
        $appointment = Appoitment::with('patient')->find($id);
        return view('admin.bookings.edit_appointment',compact('appointment','patients','centers'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {           
      
        $appointment = Appoitment::find($request->aid);
        $appointment->patient_id = $request->input('patient_id');
        $appointment->symptoms = $request->input('symptoms');
        $appointment->date_time = $request->input('date_time');
        $appointment->severity_desease = $request->input('severity_desease');
        $appointment->allergies = $request->input('allergies');
        $appointment->appointment_reason = $request->input('appointment_reason');
        $appointment->appointment_type = $request->input('appointment_type');
        $appointment->center = $request->input('center');
        $appointment->notes = $request->input('notes');       
    
        $appointment->save();
    return redirect('/appointment/index')->with('success', 'Appointment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Appoitment::where('id', $id)->delete();
        return redirect('/appointment/index')->with('success', 'App Deleted successfully');
    }
}
