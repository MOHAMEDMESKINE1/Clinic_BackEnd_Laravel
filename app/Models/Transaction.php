<?php

namespace App\Models;

use App\Models\Patient;
use App\Models\Appointement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function appointment()
    {
        return $this->belongsTo(Appointement::class);
    }
}
