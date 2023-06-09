<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
