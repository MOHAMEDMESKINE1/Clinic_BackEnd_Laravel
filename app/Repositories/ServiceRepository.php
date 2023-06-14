<?php
namespace App\Repositories;

use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class ServiceRepository implements RepositoryInterface {

    public $service ;

    public function __construct(Service $services)
    {
        return $this->service = $services ;
    }
     
    public function all() {

       
        return  $this->service->select("*")->with("doctors")->paginate(); 
    }

    public function search($query)
    {
        $results = [];

        // Search in doctors
        $doctors = $this->service->whereHas('doctors', function ($_query) use ($query) {
            $_query->where('firstname', $query)
            ->orWhere('lastname', $query)
            ;
        })
        ->paginate();

        // Search in patients
        $patients = $this->service->whereHas('patients', function ($_query) use ($query) {
            $_query->where('firstname', $query)
            ->orWhere('lastname', $query)
            ;
        })
        ->paginate();
    
        // Combine the results
        $results['doctors'] = $doctors;
        $results['patients'] = $patients;
        
        return $results;
        
    }
    public function filter($filter)
    {
        if($filter==="booked"){
            return $this->service->where('status', '=',"booked")->paginate();

        }elseif($filter==="checkin"){
            return $this->service->where('status', '=',"checkin")->paginate();

        }elseif($filter==="checkout"){
            return $this->service->where('status', '=',"checkout")->paginate();

        }elseif($filter==="cancelled"){
            return $this->service->where('status', '=',"cancelled")->paginate();

        }
        return  $this->all();
        
    }
        
    public function getById($id){
       

        return $this->service->findOrFail($id);
    }

    public function store($params){
           
            $this->service->status = $params["status"];
            $this->service->payment = $params["payment"];
            $this->service->patient_id = $params["patient"];
            $this->service->service_id = $params["services"];
            $this->service->doctor_id = $params["doctor"];
            $this->service->save();
        
    }

    public function update($params,$id){

        $service = $this->getById($id);

        $service->status = $params["status"];
        $service->payment = $params["payment"];
        $service->patient_id = $params["patient"];
        $service->doctor_id = $params["doctor"];
        $service->save();
       
    }


    public function delete($id){

        $appointement =$this->getById($id) ;
        $appointement->delete();
        $this->all();
    }


}