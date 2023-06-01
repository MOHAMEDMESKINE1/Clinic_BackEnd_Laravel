<?php

namespace App\Http\Controllers;

use App\Http\Requests\Doctor\DoctorRequest;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\DoctorRepository;
use Yajra\DataTables\Facades\DataTables;

// use DataTables;

class AdminController extends Controller
{
    public $doctors ; 
    public function __construct(DoctorRepository $doctorRepository)
    {
        $this->doctors = $doctorRepository ;
    }
    public function doctors(Request $request){

        $doctors = $this->doctors->all();
       
        return    view('dashboard.admin.doctors',compact('doctors'));

     }
     public function store (Request $request){
        
        
        $this->doctors->store($request->all());
    

       


       return  redirect()->route('admin.doctors');
     }
     public function edit ($id){
        
        $doctor = $this->doctors->getById($id);

        return  view('dashboard.admin.edit.edit',compact("doctor"));

     }
     public function update ($id,DoctorRequest $request){
        

        $this->doctors->update($id,$request->validated());
    
        return redirect()->route("admin.doctors");

       


     }
     public function delete(Request $request){

       $this->doctors->delete($request->id);
       return redirect()->route("admin.doctors");

    //    return  redirect()->route('admin.doctors');

    }
    // public function search(Request $request){

    //     $query  =$request->input('query');
      
      

    //     if($query){

    //        $doctors = $this->doctors->search($request->search);;

    //     }else{
            
           
    //        $doctors =  $this->doctors->all();
   
    //     }

    //     return response()->json($doctors);
    // }
    public function patients(){
        
        return    view('dashboard.admin.patients');
    }

  
    public function staff(){
        
        return    view('dashboard.admin.staff');

    }
    public function appointements(){
        
        return    view('dashboard.admin.appointements');
    }
    public function profile(){

        return    view('dashboard.admin.profile');

    }
    public function appointement_details(){

        return    view('dashboard.admin.appointement_details');

    }
    public function statistics(){
        return    view('dashboard.admin.statistics');

    }
    public function subscribers(){
        return    view('dashboard.admin.subscribers');

    }
    public function visits(){
        return    view('dashboard.admin.visits');

    }
    public function visits_details(){
        return    view('dashboard.admin.visits_details');

    }
    public function transactions(){
        return    view('dashboard.admin.transactions');

    }
    public function transactions_details(){
        return    view('dashboard.admin.transactions_details');

    }
    
    public function specializations(){
        return    view('dashboard.admin.specializations');

    }
    public function services(){
        return    view('dashboard.admin.services');

    }
    public function settings(){
        return    view('dashboard.admin.settings');

    }
 
}
