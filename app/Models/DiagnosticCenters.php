<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiagnosticCenters extends Model
{
    use HasFactory;
    protected $fillable=['name','country','city','description'];
}
