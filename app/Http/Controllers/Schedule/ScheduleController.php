<?php

namespace App\Http\Controllers\Schedule;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\DoctorRepository;
use App\Repositories\ScheduleRepository;

class ScheduleController extends Controller
{
   
    public $doctors ; 
    public $schedules ; 
    
    public function __construct(
        DoctorRepository $doctorRepository,
        ScheduleRepository $scheduleRepository,
    )
    {
        $this->doctors = $doctorRepository ;
        $this->schedules = $scheduleRepository ;
        
    }   


    public function schedules(){

        $doctors = $this->doctors->doctors();

        $schedules = $this->schedules->all();
        
        return    view('dashboard.doctor.schedules',compact("doctors","schedules"));

    }
   
    public function search(Request $request){

        $query = $request->saerch;

        $schedules = $this->schedules->search($query);

        $doctors = $this->doctors->all();
       
        if(  $schedules->isEmpty() ){
            $schedules  = $this->all();
        }
       
        return    view('dashboard.doctor.schedules',compact("doctors","schedules"));

    }
  
    public function store(Request $request){

        $this->schedules->store($request->all());

        toastr()->success('Schedule has been saved successfully!', 'Saving');
 
        return redirect()->route("doctor.schedules");
    }
    public function edit($id){

        $schedule = $this->schedules->getById($id);
        $doctors = $this->doctors->all();
        
        return    view('dashboard.doctor.schedule.edit',compact("doctors","schedule"));

    }
    public function update( Request $params,$id){

        
        $this->schedules->update($params,$id);

        toastr()->success('Schedule has been updated successfully!', 'Saving');
 
        return redirect()->route("doctor.schedules");

    }
    public function delete(Request $request){

        $this->schedules->delete($request->id);

        toastr()->success('Schedule has been deleted successfully!', 'Deletion');
        return redirect()->route("doctor.schedules");

    }
    public function export_schedules(){

    }
}
