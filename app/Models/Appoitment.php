<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
use App\Models\DiagnosticCenters;

class Appoitment extends Model
{
    use HasFactory;
    protected $fillable=[
        'patient_id','symptoms','severity_desease','allergies','date_time','appointment_reason','appointment_type','center','notes'
    ];
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
    public function centers(){
        return $this->belongsTo(DiagnosticCenters::class);
    }
}
