<?php
namespace App\Repositories;

use App\Models\Holiday;

use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class HolidayRepository implements RepositoryInterface {

    public $holiday ;

    public function __construct(Holiday $holidays)
    {
        return $this->holiday = $holidays ;
    }
     
    public function all() {
       
        return  $this->holiday->select("*")->paginate(5); 
    }

    public function search($query)
    {
        $holidays = $this->holiday->where('reason', 'like', '%' . $query . '%')->paginate();

        return $holidays ;
        
    }

    public function filter($query)
    {
        $holidays = $this->holiday->whereDate('date', 'like', '%' . $query . '%')->paginate();
       
       
        return $holidays ;
        
    }
    
  
        
    public function getById($id){
       

        return $this->holiday->findOrFail($id);
    }

    
    public function store($params){

            $this->holiday->date = $params["date"];
            $this->holiday->reason = $params["reason"];
            $this->holiday->save();       
    }

    public function update($params,$id){


        $holiday = $this->getById($id);

        $holiday->date = $params["date"];
        $holiday->reason = $params["reason"];
        $holiday->save();

    }


    public function delete($id){

        $holiday =$this->getById($id) ;
        
        $holiday->delete();
        
       return  $this->all();
    }


}