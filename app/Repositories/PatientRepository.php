<?php
namespace App\Repositories;

use App\Models\Patient;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class PatientRepository implements RepositoryInterface {

    public $patient ;

    public function __construct(Patient $patients)
    {
        return $this->patient = $patients ;
    }
     
    public function all() {

       
        return  $this->patient->select("*")->paginate() ; 
    }

    public function search($query)
    {
        $patients = $this->patient
        ->where('firstname', 'like', '%' . $query . '%')
        ->orWhere('lastname', 'like', '%' . $query . '%')
        ->paginate();

        return $patients ;
        
    }
    
    public function getById($id){
       

        return $this->patient->findOrFail($id);
    }

    public function store($params){

       
            
            $this->patient->firstname = $params["firstname"];
            $this->patient->lastname = $params["lastname"];
            $this->patient->unique_id = $params["unique_id"];
            $this->patient->phone = $params["phone"];
            $this->patient->email = $params["email"];
            $this->patient->birthdate = $params["birthdate"];
          

            if (isset($params['bloodGroup'])) {
                $this->patient->bloodGroup = $params["bloodGroup"];
            }
            if (isset($params['gender'])) {
                 $this->patient->gender =  $params['gender'];
            }
           

            if(request()->hasfile('photo'))
            {
                $file = request()->file('photo');
                $filename =  date('YmdHis') . "." . $file->getClientOriginalExtension();;
                $file->move("storage/patients", $filename);
                
                $this->patient->photo = "$filename";
            }        
        
            $this->patient->save();
            
            // event(new Registered($this->patient));

            // $this->patient->sendEmailVerificationNotification();
    }

    public function update($params,$id){


        $patient = $this->getById($id);

        $patient->firstname = $params["firstname"];
        $patient->lastname = $params["lastname"];
        $patient->unique_id = $params["unique_id"];
        $patient->phone = $params["phone"];
        $patient->email = $params["email"];
        $patient->birthdate = $params["birthdate"];
        $patient->bloodGroup = $params["bloodGroup"];
      

        if (isset($params['gender'])) {
             $patient->gender =  $params['gender'];
        }
       

        if(request()->hasfile('photo'))
        {
            $file = request()->file('photo');
            $filename =  date('YmdHis') . "." . $file->getClientOriginalExtension();;
            $file->move("storage/patients", $filename);
            
            $patient->photo = $filename;
        }        
        $patient->save();
    }


    public function delete($id){

        $patient =$this->getById($id) ;
     
        // Delete the existing image file
         $photo_path = $patient->photo;

         if ($photo_path && file_exists(public_path('storage/patients/' . $photo_path))) {
            unlink(public_path('storage/patients/' . $photo_path));
        }
        $patient->delete();
        
        $this->all();
    }


}