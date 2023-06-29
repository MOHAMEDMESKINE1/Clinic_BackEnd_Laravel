<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Repositories\DoctorRepository;
use App\Repositories\PatientRepository;
use App\Repositories\ServiceRepository;
use App\Repositories\AppointementRepository;
use App\Http\Controllers\Excel\ExportAppointements;

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

        $appointments = $this->appointement->all();
        $doctors = $this->doctors->all();
        $patients = $this->patients->all();
        $services = $this->services->all();

        return view('dashboard.doctor.appointements',compact(
            [
                "appointments",
                "doctors",
                "patients",
                "services"
            ]));
    }
    public function search(Request $request){

        $query = $request->search;

        $appointments = $this->appointement->search($query);

        $doctors = $this->doctors->all();
        $patients = $this->patients->all();
        $services = $this->services->all();
         
       return view('dashboard.doctor.appointements',compact(
            [
                "appointments",
                "doctors",
                "patients",
                "services"
            ]));
     }
     public function filter(Request $request){

        $query = $request->filter;

        $appointments = $this->appointement->filter($query);
        $doctors = $this->doctors->all();
        $patients = $this->patients->all();
        $services = $this->services->all();

        return view('dashboard.doctor.appointements',compact(
            [
                "appointments",
                "doctors",
                "patients",
                "services"
            ]));
    }
    public function storeAppointement (Request $request){
            
            $this->appointement->store($request->all());            
            
            // just igonre this error it still working 
                    
            toastr()->success('appointement has been saved successfully!', 'Saving ');

        return  redirect()->route('doctor.appointements');
    }

     public function appointements_details($id){

        $appointement = $this->appointement->getById($id);

        return    view('dashboard.doctor.appointement_details',compact("appointement"));

    }
     public function patients_details($id){

        $appointement = $this->patients->getById($id);

        return    view('dashboard.doctor.patient_details',compact("appointement"));

    }
    public function doctor_details($id){

        $doctor = $this->appointement->getByIdDoctors($id);
        $appointment_count = $this->appointement->appointements_count();

        // doctors
        $today_doctors_appointment = $this->appointement->today_appointements_doctors_count();
        $next_doctors_appointment = $this->appointement->next_appointements_doctors_count();
        $appointment_count = $this->appointement->appointements_count();

        return    view('dashboard.doctor.doctor_details',compact("doctor","appointment_count","today_doctors_appointment","next_doctors_appointment"));

    }

     public function deleteAppointement(Request $request){

       $this->appointement->delete($request->id);

       toastr()->success('appointement has been deleted successfully!', 'Deletion');

       return redirect()->route("doctor.appointements");

    }
    public function export_appointments()
    {
        return Excel::download( new ExportAppointements(), 'appointments.xlsx');
    }
    
    public function transactions(){

        $transactions = $this->appointement->all();

        return    view('dashboard.doctor.transactions',compact("transactions"));

    }
    public function transactions_details($id){

        $transaction = $this->appointement->getById($id);
        return    view('dashboard.doctor.transactions_details',compact("transaction"));

    }

    public function searchTransaction(Request $request)
    {
        

        $query = $request->search;

        $transactions = $this->appointement->search($query);
       
        $patients = $this->patients->all();

        
         
       return view('dashboard.doctor.transactions',compact(
            [
                "transactions",
                "patients",
               
            ]));
        
    }

    
    public function profile(){

        return    view('dashboard.doctor.profile');

    }
   
    public function holidays(){
        return    view('dashboard.doctor.holidays');

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
