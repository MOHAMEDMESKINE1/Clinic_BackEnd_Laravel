<?php

namespace App\Http\Controllers\Visit;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\DoctorRepository;
use App\Repositories\PatientRepository;
use App\Repositories\VisitRepository;

class VisitController extends Controller
{
    public $visits ; 
    public $patients ; 
    public $doctors ; 
    
    public function __construct(
        VisitRepository $visitsRepository,
        PatientRepository $patientRepository,
        DoctorRepository $doctorRepository
    )
    {
        $this->visits = $visitsRepository ;
        $this->doctors = $doctorRepository ;
        $this->patients = $patientRepository ;
        
    }   

    public function visits(){

        $doctors= $this->doctors->all();
        $patients= $this->patients->all();

        $visits= $this->visits->all();
       

        return    view('dashboard.admin.visits',compact(["visits","patients","doctors"]));

    }
    public function search(Request $request){

        $query = $request->search;
        $visits = $this->visits->search($query);

     
        $patients = $this->patients->all();

        $doctors= $this->doctors->all();
        if ($patients->isEmpty()) {

           
            $visits = $this->all();

         }
       
        return    view('dashboard.admin.visits',compact(['visits','patients','doctors']));

     }
    public function store (Request $request){
        
        $this->visits->store($request->all());

        toastr()->success('Visit has been saved successfully!', 'Saving ');

       return  redirect()->route('admin.visits');
     }

     public function edit ($id){
        
        $visit = $this->visits->getById($id);
        
        $doctors= $this->doctors->all();
        $patients= $this->patients->all();
             

        return  view('dashboard.admin.visit.edit',compact(["visit","patients","doctors"]));

     }
     public function visits_details ($id){
        
        $visit = $this->visits->getById($id);
        
        // $doctors= $this->doctors->all();
        // $patients= $this->patients->all();
             
        // "patients","doctors"
        return  view('dashboard.admin.visits_details',compact(["visit"]));

     }
    public function update (Request $params,$id){
        
        $this->visits->update($params,$id);

        toastr()->success('Visit has been updated successfully!', 'Update');

        return redirect()->route("admin.visits");
     }

    public function delete(Request $request){

       $this->visits->delete($request->id);

       toastr()->success('Visit has been deleted successfully!', 'Deletion');

       return redirect()->route("admin.visits");


    }
}
