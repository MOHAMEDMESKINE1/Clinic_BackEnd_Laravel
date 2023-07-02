<?php

namespace App\Http\Controllers;

use App\Models\AppointementOnline;
use App\Models\User;
use App\Models\Contact;
use App\Repositories\DoctorRepository;
use App\Repositories\PatientRepository;
use Illuminate\Http\Request;
use App\Repositories\ServiceRepository;
use App\Repositories\SpecializationRepository;

class WebsiteController extends Controller
{
    public $services ; 
    public $doctors ; 
    public $specializations ; 
    public $patients ; 
    
    public function __construct(
    ServiceRepository $serviceRepository,
    PatientRepository $patientRepository,
    SpecializationRepository $specializationRepository,
    DoctorRepository $doctorRepository,
   
    )
    {
        $this->services = $serviceRepository ;
        $this->doctors = $doctorRepository ;
        $this->patients = $patientRepository ;
        $this->specializations = $specializationRepository ;
    }   
    
    public function StoreContact(Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        Contact::create($request->all());

        return redirect('/');
    }
    public function team(){
        $teams = $this->doctors->allDoctors();
        return view ('website.ourteam',compact("teams"));
    }
    public function contact(){
        return view ('website.contact');
    }
    public function about(){
        $services =   $this->services->services_count(); 
        $doctors = $this->doctors->doctors_count(); 
        $specializations =$this->specializations->specialization_count()  ; 
        $patients = $this->patients->all();
        $patients_count = $this->patients->patients_count() ; 

        $teams = $this->doctors->allDoctors();
        return view ('website.about',compact("doctors","services","specializations","patients","patients_count","teams"));
    }
    public function services(){

        $services = $this->services->allServices();
        return view ('website.services',compact("services"));
    }
    
    public function StoreAppointement(Request $request){

        // $request->validate([
        //     "firstname"=>  ["required","string"],
        //     "lastname"=>  ["required","string"],
        //     "email"=>  ["required","email"],
        //     "payment_method"=>  "required",
        //     "date"=>  "required",
        //     "doctor_id"=>  "required",
        //     "service_id"=> "required"
        // ]);

        AppointementOnline::create([
            "firstname"=> $request->firstname,
            "lastname"=> $request->lastname,
            "email"=> $request->email,
            "payment_method"=> $request->payment_method,
            "date"=> $request->date,
            "doctor_id"=> $request->doctor,
            "service_id"=> $request->service
        ]);
        toastr()->success('Appointement has been sent successfully!', 'Success');

        return redirect("/");
    }
    public function appointement(){
        $services =   $this->services->all(); 
        $doctors = $this->doctors->all(); 

        return view ('website.appointement',compact("services","doctors"));
    }
    public function thankyou(){
        return view ('website.thankyou');
    }
}
