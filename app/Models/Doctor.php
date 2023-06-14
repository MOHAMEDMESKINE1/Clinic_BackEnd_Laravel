<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Appointement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{    protected $table = 'doctors'; 

    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'email',
        'year',
        'status',
        'birthdate',
        'experience',
        'bloodGroup',
        'university',
        'gender',
        'photo',
        'linkedin',
        'twitter',
        'instagram',
        'degree',
        'specialization_id',
        'remember_token',
    ];
    public function services()
    {
        return $this->hasMany(Service::class,"service_id");
    }

    public function specializations() {
        
        return $this->belongsTo(Specialization::class,'specialization_id');
    }
    public function appointements(){

        return $this->hasMany(Appointement::class,'appointment_id');
    }
    
    
   
}
