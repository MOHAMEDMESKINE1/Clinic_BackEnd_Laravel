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
       
        return  $this->specialization->select("*")->paginate(5); 
    }
    public function specialization_count() {

       
        return  $this->specialization->count() ;
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

            $this->specialization->name = $params["specialization"];
            $this->specialization->save();       
    }

    public function update($params,$id){


        $specialization = $this->getById($id);

        // $specialization =new Specialization ;
        $specialization->name = $params["specialization"];
        $specialization->save();
        // $specialization->update($params,$id);

    }


    public function delete($id){

        $specialization =$this->getById($id) ;
        
        $specialization->delete();
        
       return  $this->all();
    }


}