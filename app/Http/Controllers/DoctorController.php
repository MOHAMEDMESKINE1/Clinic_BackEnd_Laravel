<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function patient_details(){
        
        return    view('dashboard.doctor.patient_details');
    }

    public function doctors(){
        
        return    view('dashboard.doctor.doctors');

    }
    public function appointements(){
        
        return    view('dashboard.doctor.appointements');
    }
   
    public function appointement_details(){

        return    view('dashboard.doctor.appointement_details');

    }
    public function profile(){

        return    view('dashboard.doctor.profile');

    }
    public function statistics(){
        return    view('dashboard.doctor.statistics');

    }
    public function holidays(){
        return    view('dashboard.doctor.holidays');

    }
    public function transactions(){
        return    view('dashboard.doctor.transactions');

    }
    public function transactions_details(){
        return    view('dashboard.doctor.transactions_details');

    }
    public function visits(){
        return    view('dashboard.doctor.visits');

    }
    public function visits_details(){
        return    view('dashboard.doctor.visits_details');

    }
    public function schedule(){
        return    view('dashboard.doctor.schedule');

    }
    public function live_consultations(){
        return    view('dashboard.doctor.live_consultations');

    }
}
