<?php

namespace App\Http\Controllers\Appointement;

use App\Http\Controllers\Controller;
use App\Repositories\AppointementRepository;
use App\Repositories\DoctorRepository;
use App\Repositories\PatientRepository;
use Illuminate\Http\Request;

class AppointementController extends Controller
{
    public $appointement ;
    public $doctors ;
    public $patients ;

    public function __construct(AppointementRepository $appointementRepository,PatientRepository $patientRepository,DoctorRepository $doctorRepository) {
       
        $this->appointement = $appointementRepository;
        $this->doctors = $doctorRepository;
        $this->patients = $patientRepository;
    }
    public function appointements(){
        
        $appointements = $this->appointement->all();
        $doctors = $this->doctors->all();
        $patients = $this->patients->all();

        return view('dashboard.admin.appointements',compact(["appointements","doctors","patients"]));

    }

    public function search(Request $request){

        $query = $request->search;

        $appointements = $this->appointement->search($query);

        if ($appointements === "") {

           
            $appointements = $this->appointement->all();

         }
        return    view('dashboard.admin.appointements',compact('appointements'));

     }
     public function filter(Request $request){

        $query = $request->filter;

        $appointements = $this->appointement->filter($query);

        return    view('dashboard.admin.appointements',compact('appointements'));

     }
    public function store (Request $request){
            
            $this->appointement->store($request->all());            
            
            // just igonre this error it still working 
                    
            toastr()->success('appointement has been saved successfully!', 'Saving ');

        return  redirect()->route('admin.appointements');
    }
     public function appointements_details($id){

        $appointement = $this->appointement->getById($id);

        return    view('dashboard.admin.appointement_details',compact("appointement"));

    }

     public function delete(Request $request){

       $this->appointement->delete($request->id);

       toastr()->success('appointement has been deleted successfully!', 'Deletion');

       return redirect()->route("admin.appointements");

    }
}
