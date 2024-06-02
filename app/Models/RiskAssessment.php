<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiskAssessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'age',
        'gender',
        'hemoglobin',
        'pain_episodes',
        'complications',
        'medication_use'
    ];
}
