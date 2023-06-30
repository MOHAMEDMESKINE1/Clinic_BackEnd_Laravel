<?php
namespace App\Repositories;

use App\Models\Schedule;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class ScheduleRepository implements RepositoryInterface {

    public $schedule ;

    public function __construct(Schedule $schedules)
    {
        return $this->schedule = $schedules ;
    }
     
    public function all() {

    
        return  $this->schedule->select("*")->with("doctors")->paginate(5); 
         
    }

    public function search($query)
    {
       
        $schedules = $this->schedule
            ->whereHas('doctors', function ($subQuery) use ($query) {
                $subQuery->where('firstname', 'like', '%' . $query . '%')
                ->orWhere('lastname', 'like', '%' . $query . '%');                
            })
            
        ->with(['doctors'])
        ->paginate(5);
   
        return $schedules;
        
    }
  
        
    public function getById($id){
       

        return $this->schedule->findOrFail($id);
    }

    public function store($params){
           
            $this->schedule->date = $params["date"];
            $this->schedule->doctor_id = $params["doctor"];
            $this->schedule->start_time = $params["start_time"];
            $this->schedule->end_time = $params["end_time"];
            $this->schedule->save();
        
    }

    public function update($params,$id){

            $schedule = $this->getById($id);

            $schedule->date = $params["date"];
            $schedule->doctor_id = $params["doctor"];
            $schedule->start_time = $params["start_time"];
            $schedule->end_time = $params["end_time"];
            $schedule->save();
        
       
    }


    public function delete($id){

        $schedule =$this->getById($id) ;

        $schedule->delete();
        
        
    }


}