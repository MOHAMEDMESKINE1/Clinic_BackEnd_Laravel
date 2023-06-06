<?php

namespace App\Http\Controllers;

use toastr;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\DoctorRepository;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Doctor\DoctorRequest;
use App\Models\Specialization;
use App\Repositories\SpecializationRepository;

// use DataTables;

class AdminController extends Controller
{
    public $doctors ; 
    public $specializations ; 
    
    public function __construct(DoctorRepository $doctorRepository,SpecializationRepository $specializationRepository)
    {
        $this->doctors = $doctorRepository ;
        $this->specializations = $specializationRepository ;
        
    }   



    public function doctors(){

        $doctors = $this->doctors->all();
        
      
        
        return    view('dashboard.admin.doctors',compact("doctors"));

     }
    public function doctor_details($id){

        $doctor = $this->doctors->getById($id);
  
        return    view('dashboard.admin.doctor_details',compact('doctor'));

     }

     public function search(Request $request){

        $query = $request->search;

        $doctors = $this->doctors->search($query);

        if ($doctors->isEmpty()) {

           
            $doctors = $this->doctors->all();

         }
        return    view('dashboard.admin.doctors',compact('doctors'));

     }
     public function filter(Request $request){

        $query = $request->filter;

        $doctors = $this->doctors->filter($query);

        return    view('dashboard.admin.doctors',compact('doctors'));

     }

     public function create(){
        
        $specializations = $this->specializations->all();
        return view('dashboard.admin.create.create',compact("specializations"));
    }

     public function store (Request $request){
        
        $this->doctors->store($request->all());

        // /Alert::success('Registration', ' Doctor Registred Successfully !');
        
        
        // just igonre this error it still working 

        toastr()->success('Doctor has been saved successfully!', 'Saving ');

       return  redirect()->route('admin.doctors');
     }

     public function edit ($id){
        
        $doctor = $this->doctors->getById($id);
        $specializations = $this->specializations->all();

        return  view('dashboard.admin.edit.edit',compact(["doctor","specializations"]));

     }
     public function update (DoctorRequest $params,$id){
        
        $this->doctors->update($params,$id);

        toastr()->success('Doctor has been updated successfully!', 'Update');

        return redirect()->route("admin.doctors");

       


     }
     public function delete(Request $request){
        // toastr()->warning('Are you sure you want to proceed ?');
       
        // Alert::warning('Warning Title', 'Warning Message');

       $this->doctors->delete($request->id);

       toastr()->success('Doctor has been deleted successfully!', 'Deletion');

       return redirect()->route("admin.doctors");


    }
    
    public function patients(){
        
        return    view('dashboard.admin.patients');
    }

  
    public function staff(){
        
        return    view('dashboard.admin.staff');

    }
    public function appointements(){
        
        return    view('dashboard.admin.appointements');
    }
    public function profile(){

        return    view('dashboard.admin.profile');

    }
    public function appointement_details(){

        return    view('dashboard.admin.appointement_details');

    }
    public function statistics(){
        return    view('dashboard.admin.statistics');

    }
    public function subscribers(){
        return    view('dashboard.admin.subscribers');

    }
    public function visits(){
        return    view('dashboard.admin.visits');

    }
    public function visits_details(){
        return    view('dashboard.admin.visits_details');

    }
    public function transactions(){
        return    view('dashboard.admin.transactions');

    }
    public function transactions_details(){
        return    view('dashboard.admin.transactions_details');

    }
    
    public function specializations(){
        return    view('dashboard.admin.specializations');

    }
    public function services(){
        return    view('dashboard.admin.services');

    }
    public function settings(){
        return    view('dashboard.admin.settings');

    }
 
}
