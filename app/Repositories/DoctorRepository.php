<?php
namespace App\Repositories;

use Carbon\Carbon;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class DoctorRepository implements RepositoryInterface {

    public $doctor ;

    public function __construct(Doctor $doctors)
    {
        return $this->doctor = $doctors ;
    }
    public function doctorsChart(){
   
    
        $today = Carbon::now();
        $startDate = Carbon::create(date('Y'), 1, 1); // Start from January 1st of the current year

        $doctors = $this->doctor->select(DB::raw("COUNT(*) as count"), DB::raw("DATE(created_at) as date"))
            ->whereBetween('created_at', [$startDate, $today])
            ->groupBy('date')
            ->pluck('count', 'date');
        
        return $doctors;
       }
    public function all() {

       
        return  $this->doctor->select("*")->with("specializations:name")->paginate(5) ; 
    }
    public function doctors_count() {

       
        return  $this->doctor->count() ;
    }

    public function search($query)
    {
        $doctors = $this->doctor->where('lastname', 'like', '%' . $query . '%')
        ->orWhere('firstname', 'like', '%' . $query . '%')
        ->paginate();

        return $doctors ;
        
    }

    public function filter($filter)
    {
        if($filter==="0"){

            return $this->doctor->where('status', '=',0)->paginate();

        }elseif($filter==="1"){
            return $this->doctor->where('status', '=',1)->paginate();

        }
      
        return  $this->all();
        
    }
        
    public function getById($id){
       

        return $this->doctor->findOrFail($id);
    }

    public function store($params){

       
            $doctor =new Doctor ;
            $doctor->firstname = $params["firstname"];
            $doctor->lastname = $params["lastname"];
            $doctor->phone = $params["phone"];
            $doctor->email = $params["email"];
            $doctor->birthdate = $params["birthdate"];
            $doctor->exprience = $params["exprience"];
            $doctor->year = $params["year"];
            $doctor->bloodGroup = $params["bloodGroup"];
            $doctor->university = $params["university"];
            $doctor->degree = $params["degree"];
            // $doctor->specialization_id = intval($params["specialization"]);

            if (isset($params['specialization'])) {
                $doctor->specialization_id = intval($params["specialization"]);
            
               
            }

            if (isset($params['gender'])) {
                $doctor->gender = $params['gender'];
            }
            if (isset($params['status'])) {
                $doctor->status = $params['status'];
            }

            if(request()->hasfile('photo'))
            {
                $file = request()->file('photo');
                $filename =  date('YmdHis') . "." . $file->getClientOriginalExtension();;
                $file->move("storage/doctors", $filename);
                
                $doctor["photo"] = "$filename";
            }

            $doctor->linkedin = $params["linkedin"];
            $doctor->twitter = $params["twitter"];
            $doctor->instagram = $params["instagram"];
        
            $doctor->save();
      


        // return $doctor ; 
    }

    public function update($params,$id){


        $doctor = $this->getById($id);

        $doctor->firstname = $params["firstname"];
        $doctor->lastname = $params["lastname"];
        $doctor->phone = $params["phone"];
        $doctor->email = $params["email"];
        $doctor->birthdate = $params["birthdate"];
        $doctor->exprience = $params["exprience"];
        $doctor->year = $params["year"];
        $doctor->bloodGroup = $params["bloodGroup"];
        $doctor->university = $params["university"];
        $doctor->degree = $params["degree"];
        $doctor->specialization_id = $params["specialization"];

        if (isset($params['gender'])) {
            $doctor->gender = $params['gender'];
        }
        if (isset($params['status'])) {
            $doctor->status = $params['status'];
        }

        if (request()->hasfile('photo')) {
            $file = request()->file('photo');
            $filename =  date('YmdHis') . "." . $file->getClientOriginalExtension();;
            $file->move("storage/doctors", $filename);
            
            $doctor->photo = $filename; // Update the 'photo' attribute
        }

        $doctor->linkedin = $params["linkedin"];
        $doctor->twitter = $params["twitter"];
        $doctor->instagram = $params["instagram"];

        $doctor->save();

            

    }


    public function delete($id){

        $doctor =$this->getById($id) ;
     
        // Delete the existing image file
         $photo_path = $doctor->photo;

         if ($photo_path && file_exists(public_path('storage/doctors/' . $photo_path))) {
            unlink(public_path('storage/doctors/' . $photo_path));
        }
        $doctor->delete();
        
        $this->all();
    }


}