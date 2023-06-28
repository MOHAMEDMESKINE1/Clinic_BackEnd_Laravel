<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DoctorRepository;
use App\Repositories\PatientRepository;
use App\Repositories\ServiceRepository;
use App\Repositories\AppointementRepository;

class DoctorController extends Controller
{
  

    public $appointement ;
    public $doctors ;
    public $patients ;
    public $services ;

    public function __construct(AppointementRepository $appointementRepository,
    PatientRepository $patientRepository,
    DoctorRepository $doctorRepository,
    ServiceRepository $serviceRepository,
    ) {
       
        $this->appointement = $appointementRepository;
        $this->doctors = $doctorRepository;
        $this->patients = $patientRepository;
        $this->services = $serviceRepository;
    }
    public function doctors(){

        $doctors =   $this->doctors->all();
        
         return  view('dashboard.doctor.doctors',compact("doctors"));
 
 
     }
     public function statistics(){
        // $doctors = $this->doctors->doctors_count();
        return    view('dashboard.doctor.statistics');

    }
    public function patient_details(){
        
       
        return    view('dashboard.doctor.patient_details');

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
