<?php

namespace App\Http\Controllers\Review;

use App\Http\Controllers\Controller;
use App\Repositories\ReviewRepository;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public $review ; 
    
    public function __construct(
        ReviewRepository $reviewRepository,
    )
    {
        $this->review = $reviewRepository ;
        
    }   
    public function reviews(){
        

       $reviews =   $this->review->all();

       return view("dashboard.patient.reviews",compact("reviews"));

    }
    // public function edit ($id){

    //     $this->review->getById($id);

    //     return view("dashboard.patient.review.edit",compact("reviews"));
    // }

    public function store (Request $request){

        $this->review->store($request->all());
       
        $this->review->all();

        return  redirect()->route('patient.reviews');
    }

    public function update(Request $params,$id){

        $this->review->update($params->all(),$id);
       
        $this->review->all();
    }
    public function delete (Request $request){

        $this->review->delete($request->id);
 
        toastr()->warning('Review has been deleted successfully!', 'Deletion');
 
        return redirect()->route("patient.reviews");
 
     }
    
}
