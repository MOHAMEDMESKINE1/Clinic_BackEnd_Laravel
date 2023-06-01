<?php
namespace App\Repositories;

use App\Models\Doctor;


class DoctorRepository implements RepositoryInterface {

    public $doctor ;

    public function __construct(Doctor $doctors)
    {
        return $this->doctor = $doctors ;
    }
     
    public function all() {

       
        return  $this->doctor->select('*')->get() ; 
    }

    public function search($query)
    {
        $doctors = $this->doctor->where('lastname', 'like', '%' . $query . '%')->get();

        return $doctors ;
        
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
            $doctor->specialization = $params["specialization"];

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
                $file->move("storage/photos", $filename);
                
                $doctor["photo"] = "$filename";
            }

            $doctor->linkedin = $params["linkedin"];
            $doctor->twitter = $params["twitter"];
            $doctor->instagram = $params["instagram"];
        
            $doctor->save();
      


        // return $doctor ; 
    }

    public function update($id,$params){
        
            // $doctor = Doctor::where('id',$id)->first();

            // $doctor->firstname = $params["firstname"];
            // $doctor->lastname = $params["lastname"];
            // $doctor->phone = $params["phone"];
            // $doctor->email = $params["email"];
            // $doctor->birthdate = $params["birthdate"];
            // $doctor->exprience = $params["exprience"];
            // $doctor->year = $params["year"];
            // $doctor->bloodGroup = $params["bloodGroup"];
            // $doctor->university = $params["university"];
            // $doctor->degree = $params["degree"];
            // $doctor->specialization = $params["specialization"];

            // if (isset($params['gender'])) {
            //     $doctor->gender = $params['gender'];
            // }
            // if (isset($params['status'])) {
            //     $doctor->status = $params['status'];
            // }

            // if(request()->hasfile('photo'))
            // {
            //     $file = request()->file('photo');
            //     $filename =  date('YmdHis') . "." . $file->getClientOriginalExtension();;
            //     $file->move("storage/photos", $filename);
                
            //     $doctor["photo"] = $filename;
            // }

            // $doctor->linkedin = $params["linkedin"];
            // $doctor->twitter = $params["twitter"];
            // $doctor->instagram = $params["instagram"];
        
            // $doctor->save();

            $filename=null;

            $doctor = $this->getById($id);

            if (request()->hasFile('photo')) {

                $file = request()->file('photo');
                $filename = date('YmdHis') . "." . $file->getClientOriginalExtension();
                $file->move("storage/photos", $filename);
            }
          

            $doctor->update($params);

          

            

    }

    public function delete($id){

        $doctor = Doctor::find($id) ;
         // Delete the existing image file
         $photo_path = $doctor->photo;

         if ($photo_path && file_exists(public_path('storage/photos/' . $photo_path))) {
            unlink(public_path('storage/photos/' . $photo_path));
        }
        $doctor->delete();
        $this->all();
    }


}