<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Appointement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services'; 
    protected $fillable = [
        'name',
        'category',
        'photo',
        'status',
        'charge',
        'doctor_id',
        'description',
       
    ];
    public function doctors()
    {
        return $this->belongsTo(Doctor::class,"doctor_id");
    }

    public function appointments()
    {
        return $this->hasMany(Appointement::class,'appointment_id');
    }
}
