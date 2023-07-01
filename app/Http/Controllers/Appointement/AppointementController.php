<?php

namespace App\Http\Controllers\Appointement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Repositories\DoctorRepository;
use App\Repositories\PatientRepository;
use App\Repositories\ServiceRepository;
use Picqer\Barcode\BarcodeGeneratorPNG;
use App\Repositories\AppointementRepository;
use App\Http\Controllers\Excel\ExportAppointements;

class AppointementController extends Controller
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
    public function appointements(){
        
        $appointments = $this->appointement->all();
        $doctors = $this->doctors->all();
        $patients = $this->patients->all();
        $services = $this->services->all();

        return view('dashboard.admin.appointements',compact(
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
         
       return view('dashboard.admin.appointements',compact(
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

        return view('dashboard.admin.appointements',compact(
            [
                "appointments",
                "doctors",
                "patients",
                "services"
            ]));
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
    public function export_appointments()
    {
        return Excel::download( new ExportAppointements(), 'appointments.xlsx');
    }
}
