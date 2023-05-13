<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
  
   
    public function appointements(){
        
        return    view('dashboard.patient.appointements');
    }
   
    public function appointement_details(){

        return    view('dashboard.patient.appointement_details');

    }
    public function doctor_details(){
        return    view('dashboard.patient.doctor_details');

    }
    public function live_consultations(){
        return    view('dashboard.patient.live_consultations');

    }
    public function patients(){
        
        return    view('dashboard.patient.patients');

    }
    public function profile(){

        return    view('dashboard.patient.profile');

    }
    public function reviews(){
        return    view('dashboard.patient.reviews');

    }
    public function statistics(){
        return    view('dashboard.patient.statistics');

    }
  
    public function transactions(){
        return    view('dashboard.patient.transactions');

    }
    public function transactions_details(){
        return    view('dashboard.patient.transactions_details');

    }
    public function visits(){
        return    view('dashboard.patient.visits');

    }
    public function visits_details(){
        return    view('dashboard.patient.visits_details');

    }
   
    
}
