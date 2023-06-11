<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

 class Patient extends Model 
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'email',
        'unique_id',
        'birthdate',
        'bloodGroup',
        'gender',
        'photo',
    ];
   
    public function appointements(){

        return $this->hasMany(Appointement::class,'appointement_id');
    }
}
