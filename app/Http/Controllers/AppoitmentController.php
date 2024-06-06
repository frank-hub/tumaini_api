<?php

namespace App\Http\Controllers;

use App\Models\Appoitment;
use Illuminate\Http\Request;

class AppoitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.bookings.appointments');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

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
        //
    }
}
