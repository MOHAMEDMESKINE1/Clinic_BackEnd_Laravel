<?php

namespace App\Http\Controllers;

use toastr;
use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\DoctorRepository;
use App\Repositories\PatientRepository;
use App\Http\Requests\Doctor\DoctorRequest;
use App\Repositories\AppointementRepository;
use App\Repositories\SpecializationRepository;

// use DataTables;

class AdminController extends Controller
{
    public $patients ; 
    public $appointments ; 
    public $doctors ; 
    public $specializations ; 
    
    public function __construct(
    DoctorRepository $doctorRepository,
    SpecializationRepository $specializationRepository,
    PatientRepository $patientRepository,
    AppointementRepository $appointementRepository,
    )
    {
        $this->doctors = $doctorRepository ;
        $this->patients = $patientRepository ;
        $this->appointments = $appointementRepository ;
        $this->specializations = $specializationRepository ;
        
    }   


   
    public function doctors(){

        $doctors = $this->doctors->all();
        return    view('dashboard.admin.doctors',compact("doctors"));

     }
    public function doctor_details($id){

        $doctor = $this->doctors->getById($id);
        $doctors_appointments = $this->appointments->appointements_doctors_count();

        return    view('dashboard.admin.doctor_details',compact('doctor','doctors_appointments'));

     }
     public function all(){

    

      // doctors charts
      $doctors_charts = $this->doctors->doctorsChart();
      $doctors_labels =$doctors_charts->keys();
      $doctors_data  =$doctors_charts->values();

      // appointements charts
      $appointements_charts = $this->appointments->appointementsChart();
      $appointments_labels =$appointements_charts->keys();
      $appointments_data  =$appointements_charts->values();
    
      // patients  charts
      $patients = $this->patients->all();

      $Patient_charts = $this->patients->patientChart();
      $patients_labels =$Patient_charts->keys();
      $patients_data  =$Patient_charts->values();


      $doctors_count = $this->doctors->doctors_count();
      $patients_count = $this->patients->patients_count();
      $appointments_count = $this->appointments->appointements_count();
      $registred_patients = $this->patients->registred_patients();
         return  view('dashboard.admin.statistics',compact( 
            "doctors_labels",
            "doctors_data",
            "registred_patients",
            "doctors_count",
            "patients_count",
            "appointments_count",
            "registred_patients",
            "patients",
            "patients_labels",
            "patients_data",
            "appointments_labels",
            "appointments_data",
           
         ));
 
         


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
        return view('dashboard.admin.doctor.create',compact("specializations"));
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

        return  view('dashboard.admin.doctor.edit',compact(["doctor","specializations"]));

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
    
    

  
    public function staff(){
        $staffs = User::paginate();
        return    view('dashboard.admin.staff',compact("staffs"));

    }
    public function search_staff(Request $query){

      $staffs = User::where('name', 'like', '%' . $query->search . '%')
          ->orWhere('email', 'like', '%' . $query->search . '%')
          ->paginate();

          if ($staffs->isEmpty()) {

           
            $staffs = User::all();

         }
        return    view('dashboard.admin.staff',compact("staffs"));

    }
   
    public function profile(){

        return    view('dashboard.admin.profile');

    }
   
  
    public function settings(){
        return    view('dashboard.admin.settings');

    }
 
}
