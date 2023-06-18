<?php
namespace App\Repositories;

use App\Models\Service;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class SubscribeRepository implements RepositoryInterface {

    public $subscribers ;

    public function __construct(Subscriber $subscribers)
    {
        return $this->subscribers = $subscribers ;
    }
     
    public function all() {

    
        return  $this->subscribers->select("*")->paginate(5); 
         
    }

    public function search($query)
    {
       
        $services = $this->subscribers
        ->where('subscriber', 'like', '%' . $query . '%')
        ->paginate();
        return $services;
        
    }
    public function getById($id)
   {
        return $this->subscribers->findOrFail($id);
   }
  
    public function store($params){
           
       
    
        $this->subscribers->create($params);
    }

   public function update(array $params, $id)
   {
    
   }
   
    public function delete($id){

        $subscriber =$this->getById($id) ;
        $subscriber->delete();
        
        return  $this->all();
    }


}