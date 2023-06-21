<?php
namespace App\Repositories;

use Carbon\Carbon;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class AppointementRepository implements RepositoryInterface {

    public $appointement ;

    public function __construct(Appointement $appointements)
    {
        return $this->appointement = $appointements ;
    }
     
    public function all() {

       
        return  $this->appointement->select("*")->with(["doctors","patients"])->paginate(5) ; 
    }
    public function appointementsChart(){
   
        $today = Carbon::now();
        $startDate = Carbon::create(date('Y'), 1, 1)->startOfDay(); // Start from January 1st of the current year
    
        $appointments = $this->appointement->select(DB::raw("COUNT(*) as count"), DB::raw("DATE(created_at) as date"))
            ->whereBetween('created_at', [$startDate, $today])
            ->groupBy(DB::raw("DATE(created_at)"))
            ->pluck('count', 'date');
    
        return $appointments;
    
       }
    public function appointements_count() {

       
        return  $this->appointement->count() ;
    }
    public function appointements_patients_count() {

       
       $appointment =  $this->appointement->with("patients")->count();

        // if ($appointment) {
        //     $patientCount = $appointment->patients->count();
        //     return $patientCount;
        // }
        return  $appointment ;
    }
    public function search($query)
    {
        
        $appointments =$this->appointement
            ->whereHas('doctors', function ($subQuery) use ($query) {
                $subQuery->where('firstname', 'like', '%' . $query . '%')
                ->orWhere('lastname', 'like', '%' . $query . '%');                
            })
            ->orWhereHas('patients', function ($subQuery) use ($query) {
                $subQuery->where('firstname', 'like', '%' . $query . '%')
                ->orWhere('lastname', 'like', '%' . $query . '%');
            })
        ->with(['doctors', 'patients'])
        ->paginate();

       return $appointments;
        
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