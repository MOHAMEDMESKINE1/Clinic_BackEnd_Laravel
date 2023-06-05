<?php
namespace App\Repositories;

use App\Models\Doctor;
use App\Models\Specialization;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class SpecializationRepository implements RepositoryInterface {

    public $specialization ;

    public function __construct(Specialization $specializations)
    {
        return $this->specialization = $specializations ;
    }
     
    public function all() {

       
        return  $this->specialization->select("*")->paginate(5) ; 
    }

    public function search($query)
    {
        $specializations = $this->specialization->where('name', 'like', '%' . $query . '%')->paginate();

        return $specializations ;
        
    }
  
        
    public function getById($id){
       

        return $this->specialization->findOrFail($id);
    }

    public function store($params){

       
            $specialization =new specialization ;
            $specialization->name = $params["name"];
            $specialization->save();
      


       
    }

    public function update($params,$id){


        $specialization = $this->getById($id);

        $specialization =new Specialization ;
        $specialization->name = $params["name"];
        $specialization->save();

    }


    public function delete($id){

        $specialization =$this->getById($id) ;
        
        $specialization->delete();
        
        $this->all();
    }


}