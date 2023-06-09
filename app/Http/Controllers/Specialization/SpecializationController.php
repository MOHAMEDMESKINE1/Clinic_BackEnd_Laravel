<?php

namespace App\Http\Controllers\Specialization;

use App\Http\Controllers\Controller;
use App\Repositories\SpecializationRepository;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    
     public $specialization;
    
    public function __construct(SpecializationRepository $specializationRepository)
    {
       return  $this->specialization = $specializationRepository ; 
    }

    public function all(){

        $specializations = $this->specialization->all();

        return view("dashboard.admin.specializations",compact("specializations"));
    }

    public function store(Request $request){

       $this->specialization->store($request->all());

       toastr()->success('Specialization has been saved successfully!', 'Saving ');

        return redirect()->route('admin.specializations');
    }
    public function edit ($id){
        
        $specialization = $this->specialization->getById($id);
        $specializations = $this->specialization->all();

        return  view('dashboard.admin.specialization.edit',compact(["specialization","specializations"]));

     }
    public function update(Request $request){

       $this->specialization->update($request->all(),$request->id);
       toastr()->success('Specialization has been updated successfully!', 'Saving ');

        return redirect()->route('admin.specializations');
    }

    public function search(Request $request){

        $query = $request->search;

        $$query = $request->search;

        $specializations = $this->specialization->search($query);

        if ($specializations->isEmpty()) {

            $specializations = $this->specialization->all();

         }
            
         return    view('dashboard.admin.specializations',compact('specializations'));
        
        }

    public function delete(Request $request ){

       $this->specialization->delete($request->id);

       toastr()->success('Specialization has been deleted successfully!', 'Deletion');

        return redirect()->route('admin.specializations');
    }
}
