<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\DoctorRepository;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Doctor\DoctorRequest;

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
         // Check for search input
        // if (request('search')) {
        //      $doctors = Doctor::where('firstname', 'like', '%' . request('search') . '%')->get();
        //  } else {
        //     $doctors = $this->doctors->all();
        //  }

        return    view('dashboard.admin.doctors',compact('doctors'));

     }

     public function search(Request $request){

        $query = $request->search;
        $doctors = $this->doctors->search($query);

        if ($doctors->isEmpty()) {

           
            $doctors = $this->doctors->all();

         }
        return    view('dashboard.admin.doctors',compact('doctors'));

     }
     public function filter(Request $request){

        $query = $request->filter;

        $doctors = $this->doctors->filter($query);

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
     public function update (DoctorRequest $request){
        

    
        // $doctor = $this->doctors->getById($request->id);

        // $doctor->update($request->validated());

        $doctor = $this->doctors->getById($request->id);
        // Check if a new photo was provided
        if (isset($data['photo'])) {
            // Delete the old photo if it exists
            if ($doctor->photo) {
                Storage::disk('public')->delete($doctor->photo);
            }

            // Upload and update the new photo
            $photoPath = $data['photo']->store('storage/photos', 'public');
            $doctor->photo = $photoPath;
        }
        $doctor->update([
            'firstname'=> $request->firstname,
            'lastname'=> $request->lastname,
            'phone'=> $request->phone,
            'email'=> $request->email,
            'year'=> $request->year,
            'status'=> $request->status,
            'photo'=>$doctor->photo ??= null,
            'birthdate'=> $request->birthdate,
            'exprience'=> $request->exprience,
            'bloodGroup'=> $request->bloodGroup,
            'university'=> $request->university,
            'gender'=> $request->gender,
            'linkedin'=> $request->linkedin,
            'twitter'=> $request->twitter,
            'instagram'=> $request->instagram,
            'degree'=> $request->degree,
            'specialization'=> $request->specialization,
        ]);
        

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
