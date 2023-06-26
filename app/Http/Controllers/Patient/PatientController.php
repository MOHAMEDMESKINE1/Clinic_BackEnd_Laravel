<?php

namespace App\Http\Controllers\Patient;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use App\Repositories\VisitRepository;
use App\Repositories\DoctorRepository;
use App\Repositories\PatientRepository;
use App\Repositories\ServiceRepository;
use App\Http\Controllers\Excel\ExportVisits;
use App\Repositories\AppointementRepository;
use App\Http\Controllers\Excel\ExportAppointements;

class PatientController extends Controller
{

    public $patient ;
    public $appointements ;
    public $doctors ;
    public $services ;
    public $visits ;
    public function __construct(PatientRepository $patientRepository,
    AppointementRepository  $appointementRepository,
    DoctorRepository $doctorRepository,
    ServiceRepository $serviceRepository,
    VisitRepository $visitRepository,
    ) {
       
        $this->patient = $patientRepository;
        $this->appointements = $appointementRepository;
        $this->doctors = $doctorRepository;
        $this->services = $serviceRepository;
        $this->visits = $visitRepository;
        
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
     public function patients_details($id){

        $patient = $this->patient->getById($id);

        return    view('dashboard.admin.patient_details',compact("patient"));

    }
     public function update (Request $params,$id){
        
        $this->patient->update($params,$id);

        toastr()->success('Patient has been updated successfully!', 'Update');

        return redirect()->route("admin.patients");
     }

     public function delete(Request $request){

       $this->patient->delete($request->id);

       toastr()->success('Patient has been deleted successfully!', 'Deletion');

       return redirect()->route("admin.patients");

    }


    public function appointements(){

        $appointements = $this->appointements->all();
        $doctors = $this->doctors->all();
        $services = $this->services->all();
        $patients = $this->patient->all();

        return    view('dashboard.patient.appointements',compact("appointements","doctors","patients","services"));
    }
   
    public function appointement_details($id ){

        
        $appointement = $this->appointements->getById($id);

        return    view('dashboard.patient.appointement_details',compact("appointement"));

    }
    public function cancelAppointement($id ){

        
         $this->appointements->cancelAppointement($id);
        

        return    redirect()->route("patient.appointements");

    }
    public function export_appointments()
    {
        return Excel::download( new ExportAppointements(), 'appointments.xlsx');
    }
    // transactions
    public function transactions(){

        $transactions = $this->appointements->all();

        return    view('dashboard.patient.transactions',compact("transactions"));

    }
    public function transactions_details($id){

        $transaction = $this->appointements->getById($id);
        return    view('dashboard.patient.transactions_details',compact("transaction"));

    }

    public function searchTransaction(Request $request)
    {
        

        $query = $request->search;

        $transactions = $this->appointements->search($query);
       
        $patients = $this->patient->all();

        
         
       return view('dashboard.patient.transactions',compact(
            [
                "transactions",
                "patients",
               
            ]));
        
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
  
    //visits
    public function visits(){

        $doctors= $this->doctors->all();
        $patients= $this->patient->all();

        $visits= $this->visits->all();
       

        return    view('dashboard.patient.visits',compact(["visits","patients","doctors"]));


    }
    public function searchVisit(Request $request){

        $query = $request->search;
        $visits = $this->visits->search($query);

     
        $patients = $this->patient->all();

        $doctors= $this->doctors->all();
        if ($patients->isEmpty()) {

           
            $visits = $this->all();

         }
       
        return    view('dashboard.patient.visits',compact(['visits','patients','doctors']));

     }
     public function visits_details ($id){
        
        $visit = $this->visits->getById($id);
        
        return  view('dashboard.patient.visits_details',compact(["visit"]));

     }
     public function export_visits()
     {
         return Excel::download( new ExportVisits(), 'visits.xlsx');
     }


    // appointements
    public function searchAppointement(Request $request){

        $query = $request->search;

        $appointements = $this->appointements->search($query);

        $doctors = $this->doctors->all();
        $patients = $this->patient->all();
        $services = $this->services->all();

        if ($appointements->isEmpty()) {

           
            $appointements = $this->appointements->all();

         }
       return view('dashboard.patient.appointements',compact(
            [
                "appointements",
                "doctors",
                "patients",
                "services"
            ]));
     }
    public function filterAppointement(Request $request){

        $query = $request->filter;

        $appointements = $this->appointements->filter($query);
        $doctors = $this->doctors->all();
        $patients = $this->patient->all();
        $services = $this->services->all();

        if($appointements->isEmpty()){
            $appointements = $this->appointements->all();
        }
        return view('dashboard.patient.appointements',compact(
            [
                "appointements",
                "doctors",
                "patients",
                "services"
            ]));
    }
    public function storeAppointement (Request $request){
            
            $this->appointements->store($request->all());            
            
            // just igonre this error it still working 
                    
            toastr()->success('appointement has been saved successfully!', 'Saving ');

        return  redirect()->route('patient.appointements');
    }
    public function deleteAppointement (Request $request){

        $this->appointements->delete($request->id);
 
        toastr()->success('appointement has been deleted successfully!', 'Deletion');
 
        return redirect()->route("patient.appointements");
 
     }
    
    public function verify(Request $request)
    {
        // Assuming the patient's email is stored in the session
        $email = $request->session()->get('email');

        // Get the patient's record from the database
        $patient = DB::table('patients')->where('email', $email)->first();

        // Check if the email_verification_token is not null and matches the provided token
        if ($patient && $patient->email_verification_token && $patient->email_verification_token === $request->input('token')) {
            // Update the patient's record to mark the email as verified
            DB::table('patients')->where('id', $patient->id)->update(['email_verified' => true]);

            return redirect()->route('admin.patients');
        } else {
            // Return an error message
            return redirect()->route('verification.resend')->withErrors(['token' => 'The verification link is invalid. Please try again.']);
        }
    }
    public function resend(Request $request)
    {
        // Assuming the patient's email is stored in the session
        $email = $request->session()->get('email');

        // Generate a unique token for this patient
        $token = Str::random(60);

        // Save the token to the patient's record in the database
        DB::table('patients')->where('email', $email)->update(['email_verification_token' => $token]);

        // Send the verification link to the patient
        Mail::send('auth.verify-email', ['token' => $token], function ($message) use ($email) {
            $message->to($email)
                ->subject('Email Verification');
        });

        // Clear the token from the patient's record in the database
        DB::table('patients')->where('email', $email)->update(['email_verification_token' => null]);

        return redirect()->route('verification.verify', ['token' => $token]);;
    }
}
