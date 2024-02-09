<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Repositories\DoctorRepository;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class ServiceController extends Controller
{ 
    public $services ; 
    public $doctors ; 
    
    public function __construct(
        ServiceRepository $serviceRepository,
        DoctorRepository $doctorRepository
    )
    {
        $this->services = $serviceRepository ;
        $this->doctors = $doctorRepository ;
        
    }   

    public function services(){

        $doctors= $this->doctors->all();

      
        $services= $this->services->all();
       

        return    view('dashboard.admin.services',compact(["services","doctors"]));

    }
    public function search(Request $request){

        $query = $request->search;

        if($query){
            $services = $this->services->search($query);

            if($services->isEmpty()){
                $services = $this->services->all();
            }
        }else{
            $services = $this->services->all();
        }
      
        $doctors= $this->doctors->all();

        return    view('dashboard.admin.services',compact(['services','doctors']));

     }
    public function store (Request $request){
        
        $this->services->store($request->all());

        toastr()->success('Service has been saved successfully!', 'Saving ');

       return  redirect()->route('admin.services');
     }

     public function edit ($id){
        
        $service = $this->services->getById($id);
        
        $doctors= $this->doctors->all();

        return  view('dashboard.admin.service.edit',compact(["service","doctors"]));

     }
    public function update (Request $params,$id){
        
        $this->services->update($params,$id);

        toastr()->success('Service has been updated successfully!', 'Update');

        return redirect()->route("admin.services");
     }

    public function delete(Request $request){

       $this->services->delete($request->id);

       toastr()->success('Service has been deleted successfully!', 'Deletion');

       return redirect()->route("admin.services");


    }
}
