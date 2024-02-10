<?php
namespace App\Repositories;

use App\Models\Review;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Auth;

class ReviewRepository implements RepositoryInterface {

    public $reviews ;

    public function __construct(Review $reviews)
    {
        return $this->reviews = $reviews ;
    }
     
    public function all() {

    
        // $user_id = auth()->user()->id;
         $reviews =  $this->reviews->select("*")->with("users")
         ->latest()->paginate(6); 
    

         return $reviews;
      

      
         
    }

    public function search($query)
    {
       
        
        
    }
    public function getById($id)
   {
        return $this->reviews->findOrFail($id);
   }
  
    public function store($params){
    

        $this->reviews->review = $params["review"];
        $this->reviews->rate = $params["rate"];
        $this->reviews->user_id = Auth::id();

        $this->reviews->save();
    }

   public function update( $params, $id)
   {   
        $review = $this->getById($id);

        $review->review = $params["review"];
        $review->rate = $params["rate"];
        $review->user_id = Auth::id();

        $review->save();
    
   }
   
    public function delete($id){

        $review =$this->getById($id) ;
        $review->delete();
        $this->all();
        
      
    }


}