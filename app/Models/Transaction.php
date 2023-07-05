<?php

namespace App\Models;

use App\Models\Patient;
use App\Models\Appointement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    public function patients()
    {
        return $this->belongsTo(Patient::class,'patient_id');
    }
    public function appointments()
    {
        return $this->belongsTo(Appointement::class,'appointment_id');
    }
}
