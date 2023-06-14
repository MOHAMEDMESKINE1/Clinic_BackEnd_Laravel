<?php
namespace App\Repositories;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointement;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class AppointementRepository implements RepositoryInterface {

    public $appointement ;

    public function __construct(Appointement $appointements)
    {
        return $this->appointement = $appointements ;
    }
     
    public function all() {

       
        return  $this->appointement->select("*")->with(["doctors","patients"])->paginate() ; 
    }

    public function search($query)
    {
        $results = [];

        // Search in doctors
        // $doctors = $this->appointement->whereHas('doctors', function ($_query) use ($query) {
        //     $_query->where('firstname', $query)
        //     ->orWhere('lastname', $query)
        //     ;
        // })
        // ->paginate();

        // // Search in patients
        // $patients = $this->appointement->whereHas('patients', function ($_query) use ($query) {
        //     $_query->where('firstname', $query)
        //     ->orWhere('lastname', $query)
        //     ;
        // })
        // ->paginate();
         // Search in doctors
        $doctors = Doctor::where('firstname', $query)
        ->orWhere('lastname', $query)
        ->paginate();

    // Search in patients
    $patients = Patient::where('firstname', $query)
        ->orWhere('lastname', $query)
        ->paginate();

    
        // Combine the results
        $results['doctors'] = $doctors;
        $results['patients'] = $patients;
        
        return $results;
        
    }
    public function filter($filter)
    {
        if($filter==="booked"){
            return $this->appointement->where('status', '=',"booked")->paginate();

        }elseif($filter==="checkin"){
            return $this->appointement->where('status', '=',"checkin")->paginate();

        }elseif($filter==="checkout"){
            return $this->appointement->where('status', '=',"checkout")->paginate();

        }elseif($filter==="cancelled"){
            return $this->appointement->where('status', '=',"cancelled")->paginate();

        }

       return $this->all();
        
    }
        
    public function getById($id){
       

        return $this->appointement->with(["doctors","patients","services"])->findOrFail($id);
    }

    public function store($params){
           
            $this->appointement->status = $params["status"];
            $this->appointement->payment = $params["payment"];
            $this->appointement->patient_id = $params["patient"];
            $this->appointement->service_id = $params["services"];
            $this->appointement->charge = $params["charge"];
            $this->appointement->extra_fees = $params["extra_fees"];
            $this->appointement->total_payment = $params["total_payment"];
            $this->appointement->date = $params["date"];
            $this->appointement->doctor_id = $params["doctor"];
            $this->appointement->save();
        
    }

    public function update($params,$id){

        $appointement = $this->getById($id);

        $appointement->status = $params["status"];
        $appointement->payment = $params["payment"];
        $appointement->patient_id = $params["patient"];
        $appointement->service_id = $params["services"];
        $appointement->charge = $params["charge"];
        $appointement->extra_fees = $params["extra_fees"];
        $appointement->total_payment = $params["total_payment"];
        $appointement->date = $params["date"];
        $appointement->doctor_id = $params["doctor"];
        $appointement->save();
       
    }


    public function delete($id){

        $appointement =$this->getById($id) ;
        $appointement->delete();
    }


}