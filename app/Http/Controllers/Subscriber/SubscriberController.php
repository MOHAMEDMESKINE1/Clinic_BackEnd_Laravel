<?php

namespace App\Http\Controllers\Subscriber;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\SubscribeRepository;

class SubscriberController extends Controller
{
    public $subscribers ; 
    
    public function __construct(
        SubscribeRepository $subscribeRepository,
    )
    {
        $this->subscribers = $subscribeRepository ;
        
    }   

    public function subscribers(){

         $subscribers = $this->subscribers->all();

         return view("dashboard.admin.subscribers",compact("subscribers"));
    }
    public function store(Request $request){

        $request->validate([
            'subscriber' => 'required' // Add any other validation rules if needed
        ]);
        $data = [
            'subscriber' => $request->input('subscriber')
        ];

        $this->subscribers->store($data);

        toastr()->success('Thank you for your subscribe !', 'Subscription ');

         return view("welcome");
    }
    public function delete(Request $request){

        $this->subscribers->delete($request->id);

        
         return view("dashboard.admin.subscribers");
    }
}
