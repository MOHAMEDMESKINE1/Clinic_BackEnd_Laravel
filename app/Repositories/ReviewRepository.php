<?php
namespace App\Repositories;

use App\Models\Review;
use App\Models\Subscriber;

class ReviewRepository implements RepositoryInterface {

    public $reviews ;

    public function __construct(Review $reviews)
    {
        return $this->reviews = $reviews ;
    }
     
    public function all() {

    
        return  $this->reviews->select("*")->with("users")->latest()->paginate(5); 
         
    }

    public function search($query)
    {
       
        
        
    }
    public function getById($id)
   {
        return $this->reviews->findOrFail($id);
   }
  
    public function store($params){
    
        $this->reviews->create($params);
    }

   public function update( $params, $id)
   {   
        $review = $this->getById($id);

        $review->review = $params["review"];
        $review->rate = $params["rate"];

        $review->save();
    
   }
   
    public function delete($id){

        $review =$this->getById($id) ;
        $review->delete();
        
        return  $this->all();
    }


}