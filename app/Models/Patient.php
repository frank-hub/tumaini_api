<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    // The attributes that are mass assignable.
    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'gender',
        'address',
        'town',
        'postal_code',
        'county',
        'phone_number',
        'email',
        'emergency_contact_name',
        'emergency_contact_phone',
    ];

    // You can define relationships here if needed, for example:
    // public function appointments()
    // {
    //     return $this->hasMany(Appointment::class);
    // }
}
