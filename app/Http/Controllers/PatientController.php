<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients= Patient::all();
        return view('admin.patient.patients',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('admin.patient.add_patient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string|max:10',
            'address' => 'nullable|string|max:255',
            'town' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:20',
            'county' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'email' => 'nullable|string|email|max:255|unique:patients,email',
            'emergency_contact_name' => 'nullable|string|max:255',
            'emergency_contact_phone' => 'nullable|string|max:20',
        ]);

        // Create a new patient record
        $patient = Patient::create($validatedData);
        Alert::success('Patient Registration', 'You\'ve Successfully Registered');
        return redirect()->back();
        // Return a response
        return response()->json([
            'message' => 'Patient created successfully',
            'patient' => $patient
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $patient = Patient::find($id);
        return view('admin.patient.patient_details',compact('patient'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('admin.patient.edit_patient',compact('patient'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
      
        $patient = Patient::find($request->pid);
        $patient->first_name = $request->input('first_name');
        $patient->last_name = $request->input('last_name');
        $patient->date_of_birth = $request->input('date_of_birth');
        $patient->gender = $request->input('gender');
        $patient->address = $request->input('address');
        $patient->town = $request->input('town');
        $patient->county = $request->input('county');
        $patient->phone_number = $request->input('phone_number');
        $patient->email = $request->input('email');
        $patient->emergency_contact_name = $request->input('emergency_contact_name');
        $patient->emergency_contact_phone = $request->input('emergency_contact_phone');
    
        $patient->save();
    return redirect('/patients/view')->with('success', 'Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        
    }
}
