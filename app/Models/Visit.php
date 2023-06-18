<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visit extends Model
{
    use HasFactory;
    public function doctors()
    {
        return $this->belongsTo(Doctor::class,"doctor_id");
    }

    /**
     * Get the patient associated with the visit.
     */
    public function patients()
    {
        return $this->belongsTo(Patient::class,"patient_id");
    }
}
