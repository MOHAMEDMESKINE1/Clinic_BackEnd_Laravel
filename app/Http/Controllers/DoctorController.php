<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Repositories\VisitRepository;
use App\Repositories\DoctorRepository;
use App\Repositories\PatientRepository;
use App\Repositories\ServiceRepository;
use App\Http\Controllers\Excel\ExportVisits;
use App\Repositories\AppointementRepository;
use App\Http\Controllers\Excel\ExportAppointements;

class DoctorController extends Controller
{
  

    public $appointement ;
    public $doctors ;
    public $patients ;
    public $services ;
    public $visits ;

    public function __construct(AppointementRepository $appointementRepository,
    PatientRepository $patientRepository,
    DoctorRepository $doctorRepository,
    ServiceRepository $serviceRepository,
    VisitRepository $visitRepository,
    ) {
       
        $this->appointement = $appointementRepository;
        $this->doctors = $doctorRepository;
        $this->patients = $patientRepository;
        $this->services = $serviceRepository;
        $this->visits = $visitRepository;
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

      
        $doctors = $this->doctors->all();
        $patients = $this->patients->all();
        $services = $this->services->all();

        if($query){

            $appointments = $this->appointement->search($query);

            if($appointments->isEmpty()){
                // $appointments = $this->appointement->all();
                $appointments = $this->appointement->all();
            }
        }else{
            $appointments = $this->appointement->all();

        }
        
         
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

       
        if($query){
            $transactions = $this->appointement->search($query);

            if($transactions->isEmpty()){

                $transactions = $this->appointement->all();
            }
        }else{
            $transactions = $this->appointement->all();
        }
      
        $patients = $this->patients->all();

        
         
       return view('dashboard.doctor.transactions',compact(
            [
                "transactions",
                "patients",
               
            ]));
        
    }

    
    // visits
    public function visits(){

        $doctors= $this->doctors->all();
        $patients= $this->patients->all();

        $visits= $this->visits->all();
       

        return    view('dashboard.doctor.visits',compact(["visits","patients","doctors"]));

    }
    public function storeVisit(Request $request){

        $this->visits->store($request->all());

        return    redirect()->route("doctor.visits");

    }
    public function searchVisit( Request $request){
        
    
        $query = $request->search;
        
        $visits = $this->visits->search($query);
        if ($query) {
            $visits = $this->visits->search($query);

            if($visits->isEmpty()){
                $visits = $this->visits->all();
            }


         }
         $patients = $this->patients->all();
         $doctors= $this->doctors->all();
 
        return    view('dashboard.doctor.visits',compact(['visits','patients','doctors']));

      

    }
    public function visits_details ($id){
        
        $visit = $this->visits->getById($id);
    
        return  view('dashboard.doctor.visits_details',compact("visit"));

     }
    public function editVisit($id){

         $visit = $this->visits->getById($id);
         $doctors= $this->doctors->all();
         $patients= $this->patients->all();

        return    view('dashboard.doctor.visit.edit',compact("visit","doctors","patients"));

    }

    public function updateVisit (Request $params,$id){
        
        $this->visits->update($params,$id);

        toastr()->success('Visit has been updated successfully!', 'Update');

        return redirect()->route("doctor.visits");
    
    }
    public function deleteVisit(Request $request){

        $this->visits->delete($request->id);
 
        toastr()->success('Visit has been deleted successfully!', 'Deletion');
 
        return redirect()->route("doctor.visits");
 
 
     }
    public function export_visits()
    {
        return Excel::download( new ExportVisits(), 'visits.xlsx');
    }

    public function profile(){

        return    view('dashboard.doctor.profile');

    }
   
    public function holidays(){
        return    view('dashboard.doctor.holidays');

    }
    
   
    
    public function live_consultations(){
        return    view('dashboard.doctor.live_consultations');

    }
}
