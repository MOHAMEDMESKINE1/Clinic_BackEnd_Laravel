<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Appointement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    public function doctors()
    {
        return $this->belongsTo(Doctor::class,"doctor_id");
    }

    public function appointments()
    {
        return $this->hasMany(Appointement::class,'appointment_id');
    }
}
