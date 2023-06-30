<?php

namespace App\Http\Controllers\Holiday;

use App\Http\Controllers\Controller;
use App\Repositories\HolidayRepository;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    public $holidays ; 
    
    public function __construct(HolidayRepository $holidayRepository,)
    {
       
        $this->holidays = $holidayRepository ;
        
    }   


    public function holidays(){

        $holidays = $this->holidays->all();


        return view("dashboard.doctor.holidays",compact("holidays"));
    }
    public function search(Request $request){
        
        $query = $request->search;

        $holidays = $this->holidays->search($query);



        return view("dashboard.doctor.holidays",compact("holidays"));
    }
    public function filter(Request $request){
        
        $query = $request->filter;

        $holidays = $this->holidays->filter($query);

        if($holidays->isEmpty()){
            $holidays = $this->holidays->all();
        }

        return view("dashboard.doctor.holidays",compact("holidays"));
    }
    public function store(Request $params){

         $this->holidays->store($params);

         toastr()->success('Holiday has been saved successfully!', 'Saving');

        return redirect()->route("doctor.holidays");
    }
    public function delete(Request $request){

        $holiday = $this->holidays->getById($request->id);

        $holiday->delete();

         toastr()->warning('Holiday has been deleted successfully!', 'Deletion');

        return redirect()->route("doctor.holidays");
    }
}
