<?php
namespace App\Repositories;

use App\Models\Visit;


class VisitRepository implements RepositoryInterface {

    public $visit ;

    public function __construct(Visit $visits)
    {
        return $this->visit = $visits ;
    }
     
    public function all() {

       
        return  $this->visit->select("*")->with(["doctors","patients"])->paginate(5) ; 
    }

    public function search($query)
    {
        $visits =$this->visit
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

        return $visits;
        
    }
   
        
    public function getById($id){
       

        return $this->visit->findOrFail($id);
    }

    public function store($params){
            
            if (isset($params['doctor'])) {
                $this->visit->doctor_id = intval($params["doctor"]);
               
            }
            if (isset($params['patient'])) {
                $this->visit->patient_id = intval($params["patient"]);
               
            }
            $this->visit->date = $params["date"];
            $this->visit->description = $params["description"];
        

            $this->visit->save();
           
    }

    public function update($params,$id){

        $visit = $this->getById($id);

       
        if (isset($params['doctor'])) {
            $visit->doctor_id = intval($params["doctor"]);
           
        }
        if (isset($params['patient'])) {
            $visit->patient_id = intval($params["patient"]);
           
        }
        $visit->date = $params["date"];
        $visit->description = $params["description"];
        
        $visit->save();
              

    }


    public function delete($id){

        $visit =$this->getById($id) ;

        $visit->delete();
        
        $this->all();
    }


}