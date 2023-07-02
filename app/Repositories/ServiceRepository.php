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

    
        return  $this->service->select("*")->with("doctors")->paginate(5); 
         
    }
    public function allServices() {

    
        return  $this->service->select("*")->with("doctors")->get(); 
         
    }
    public function services_count() {

       
        return  $this->service->count() ;
    }

    public function search($query)
    {
       
        $services = $this->service
        ->where('name', 'like', '%' . $query . '%')
        ->orWhere('category', 'like', '%' . $query . '%')
        ->paginate();
        return $services;
        
    }
  
        
    public function getById($id){
       

        return $this->service->findOrFail($id);
    }

    public function store($params){
           
            $this->service->name = $params["name"];
            $this->service->category = $params["category"];
            $this->service->charge = $params["charge"];
            $this->service->doctor_id = $params["doctor"];
            $this->service->description = $params["description"];

            if (!isset($params['status'])) {
                $this->service->status = 0;
            }

            if(request()->hasfile('photo'))
            {
                $file = request()->file('photo');
                $filename =  date('YmdHis') . "." . $file->getClientOriginalExtension();;
                $file->move("storage/services/", $filename);
                
                $this->service["photo"] = "$filename";
            }


            $this->service->save();
        
    }

    public function update($params,$id){

            $service = $this->getById($id);

            $service->name = $params["name"];
            $service->category = $params["category"];
            $service->charge = $params["charge"];
           
            if (isset($params['doctor'])) { // Check if 'doctor' value is present in $params array
                $service->doctor_id = $params["doctor"];
            }           
             $service->description = $params["description"];

            if (isset($params['status'])) {
            $service->status = 0;
        }

        if (request()->hasfile('photo')) {
            $file = request()->file('photo');
            $filename =  date('YmdHis') . "." . $file->getClientOriginalExtension();;
            $file->move("storage/services", $filename);
            
            $service->photo = $filename; // Update the 'photo' attribute
        }
           
           
        $service->save();
       
    }


    public function delete($id){

        $service =$this->getById($id) ;

         // Delete the existing image file
         $photo_path = $service->photo;

         if ($photo_path && file_exists(public_path('storage/services/' . $photo_path))) {
            unlink(public_path('storage/services/' . $photo_path));
        }

        $service->delete();
        
        $this->all();
    }


}