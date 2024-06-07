<?php

namespace App\Http\Controllers;

use App\Models\DiagnosticCenters;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DiagnosticCentersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centers= DiagnosticCenters::all();
        return view('admin.centers.centers',compact('centers'));
    }
    public function create(){
        return view('admin.centers.add_center');
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',           
            'description' => 'nullable|string|max:255',
            
        ]);
    
        $center = DiagnosticCenters::create($validatedData);
        Alert::success('Diagnostic Centers Creation', 'You\'ve Successfully Registered');
        return redirect()->back();
        // Return a response
        return response()->json([
            'message' => 'Diagnostic Center created successfully',
            'center' => $center
        ], 201);
    }

  
    /**
     * Display the specified resource.
   

   
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $center = DiagnosticCenters::find($id);
        return view('admin.centers.edit_centers',compact('center'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
      
        $center = DiagnosticCenters::find($request->cid);
        $center->name = $request->input('name');
        $center->country = $request->input('country');
        $center->city = $request->input('city');
        $center->description = $request->input('description');        
        $center->save();
    return redirect('/centers/view')->with('success', 'DCenters updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DiagnosticCenters::where('id', $id)->delete();
        return redirect('/centers/view')->with('success', 'Center Deleted successfully');
    }
}
