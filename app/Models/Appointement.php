<?php

namespace App\Models;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointement extends Model
{
    use HasFactory;


    public function patients(){
        return $this->belongsTo(Patient::class,'patient_id');
    }
    
    public function doctors(){
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
}
