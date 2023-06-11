<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
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
    public function specializations() {
        
        return $this->belongsTo(Specialization::class,'specialization_id');
    }

    // public function getCreatedAtAttribute($value)
    // {
    //     return Carbon::parse($value)->format('Y-m-d'); // Change the format as desired
    // }
    // public function getUpdatedAtAttribute($value)
    // {
    //         return Carbon::parse($value)->format('Y-m-d'); // Change the format as desired
    // }
   
}
