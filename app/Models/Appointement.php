<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Service;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointement extends Model
{
    use HasFactory;
    protected $table = 'appointments'; 


    public function patients(){
        return $this->belongsTo(Patient::class,'patient_id');
    }
    
    public function doctors(){
        return $this->belongsTo(Doctor::class,'doctor_id');
    }

    public function services()
    {
        return $this->belongsTo(Service::class,'service_id');
    }
    
    public function transactions()
    {
        return $this->hasOne(Transaction::class);
    }
    public function WhereBarCode($barcode)
    {
        return $this->where('barcode', $barcode);
    }
    
   
}
