<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

 class Patient  extends Authenticatable implements MustVerifyEmail
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
        'email_verified_at',
        'email_verification_token',
    ];
   
    public function appointements(){

        return $this->hasMany(Appointement::class,'appointement_id');
    }
}
