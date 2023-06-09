<?php

namespace App\Http\Controllers\Patient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\PatientRepository;

class PatientController extends Controller
{

    public $patient ;

    public function __construct(PatientRepository $patientRepository) {
       
        $this->patient = $patientRepository;
    }
    public function patients(){
        
        $patients = $this->patient->all();
        return    view('dashboard.admin.patients',compact("patients"));

    }

    public function search(Request $request){

        $query = $request->search;

        $patients = $this->patient->search($query);

        if ($patients->isEmpty()) {

           
            $patients = $this->patient->all();

         }
        return    view('dashboard.admin.patients',compact('patients'));

     }
    public function store (Request $request){
            
            $this->patient->store($request->all());            
            
            // just igonre this error it still working 

            toastr()->success('Patient has been saved successfully!', 'Saving ');

        return  redirect()->route('admin.patients');
    }

    public function edit ($id){
        
        $patient = $this->patient->getById($id);

        return  view('dashboard.admin.patient.edit',compact("patient"));

     }

     public function update (Request $params,$id){
        
        $this->patient->update($params,$id);

        toastr()->success('Patient has been updated successfully!', 'Update');

        return redirect()->route("admin.patients");
     }

     public function delete(Request $request){

       $this->patient->delete($request->id);

       toastr()->success('Patient has been deleted successfully!', 'Deletion');

       return redirect()->route("admin.doctors");

    }


    public function appointements(){
        
        return    view('dashboard.admin.appointements');
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
