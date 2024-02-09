<?php
namespace App\Repositories;

use Carbon\Carbon;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Picqer\Barcode\BarcodeGeneratorPNG;
use Picqer\Barcode\BarcodeGeneratorHTML;
use RealRashid\SweetAlert\Facades\Alert;


class AppointementRepository implements RepositoryInterface {

    public $appointement ;

    public function __construct(Appointement $appointements)
    {
        return $this->appointement = $appointements ;
    }
     
    public function all() {

       
        return  $this->appointement->select("*")->with(["doctors","patients"])->latest()->paginate(5) ; 
    }
    public function appointementsChart(){
   
        $today = Carbon::now();
        $currentMonth = now()->month;
        $currentDay = now()->day;
        $startDate = Carbon::create(date('Y'),$currentMonth,$currentDay)->startOfDay(); // Start from January 1st of the current year
    
        $appointments = $this->appointement->select(DB::raw("COUNT(*) as count"), DB::raw("DATE(created_at) as date"))
            ->whereBetween('created_at', [$startDate, $today])
            ->groupBy(DB::raw("DATE(created_at)"))
            ->pluck('count', 'date');
    
        return $appointments;
    
       }
    public function appointements_count() {

       
        return  $this->appointement->count() ;
    }
    public function today_appointements_patients_count() {

       
       $appointment =  $this->appointement->with("patients")->whereDate("created_at",Carbon::today())->count();

       
       return  $appointment ;
      
       
    }
    public function today_appointements_doctors_count() {

       
       $appointment =  $this->appointement->with("doctors")->whereDate("created_at",Carbon::today())->count();

       
       return  $appointment ;
      
       
    }
    public function next_appointements_patients_count() {

       
       $appointment =  $this->appointement->with("patients")->whereDate("created_at",Carbon::today()->addDay())->count();

       
       return  $appointment ;
      
       
    }
    public function next_appointements_doctors_count() {

       
       $appointment =  $this->appointement->with("doctors")->whereDate("created_at",Carbon::today()->addDay())->count();

       
       return  $appointment ;
      
       
    }
   
    public function appointements_doctors_count() {

       
       $appointment =  $this->appointement->with("doctors")->count();

        
        return  $appointment ;
    }
    public function today_appointements_doctors() {

       
        $appointment =  $this->appointement->with("doctors")->whereDate("created_at",Carbon::today())->get();
 
         
         return  $appointment ;
     }
     public function upcoming_appointements_doctors() {
 
        
        $appointment =  $this->appointement->with("doctors")->whereDate("date",'>',Carbon::today())->get();
 
         
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
        ->paginate(5);

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

        return $this->all() ;
      
        
    }
    public function barCodeExists($number){
        
        return $this->appointement->WhereBarCode($number)->exists();
    }  
    public function getById($id){
       

        return $this->appointement->with(["doctors","patients","services"])->findOrFail($id);
    }
    public function getByIdAppointement($id){
       

        return $this->appointement->with(["doctors","patients"])->where("id",$id)->first();
    }
    public function getByIdDoctors($id){
       

        return $this->appointement->with("doctors")->findOrFail($id);
    }
    public function getByIdPatients($id){
       

        return $this->appointement->with("patients")->findOrFail($id);
    }

    public function store($params){
        $number =$params["sku"];
        $generator = new BarcodeGeneratorPNG();
        $barcode = base64_encode($generator->getBarcode($number, $generator::TYPE_CODE_128));
     
        // $generator = new BarcodeGeneratorHTML();
        // $barcode = $generator->getBarcode($number, $generator::TYPE_CODE_128);
            

        $total_payment  = $params["charge"] + $params["extra_fees"];
            $this->appointement->status = $params["status"];
            $this->appointement->payment = $params["payment"];
            $this->appointement->patient_id = $params["patient"];
            $this->appointement->service_id = $params["services"];
            $this->appointement->charge = $params["charge"];
            $this->appointement->extra_fees = $params["extra_fees"] ;
            $this->appointement->total_payment = $total_payment ;
            $this->appointement->date = $params["date"];
            $this->appointement->doctor_id = $params["doctor"];
            
            $this->appointement->sku = $params["sku"];;
            $this->appointement->barcode = $barcode;

            $this->appointement->save();
        
    }

    public function update($params,$id){
        
        $total_payment  = $params["charge"] + $params["extra_fees"];
        $appointement = $this->getById($id);

        $appointement->status = $params["status"];
        $appointement->payment = $params["payment"];
        $appointement->patient_id = $params["patient"];
        $appointement->service_id = $params["services"];
        $appointement->charge = $params["charge"];
        $appointement->extra_fees = $params["extra_fees"];
        $appointement->total_payment = $total_payment;
        $appointement->date = $params["date"];
        $appointement->doctor_id = $params["doctor"];
        $appointement->save();
       
    }
    public function cancelAppointement($id){

        $appointement = $this->getById($id);

        $appointement->status = "cancelled";   

        $appointement->save();

        return $this-> all();

       
    }


    public function delete($id){

        $appointement =$this->getById($id) ;
        $appointement->delete();
    }


}