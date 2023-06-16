<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\PatientRepository;
use App\Repositories\AppointementRepository;

class TransactionController extends Controller
{
    public $appointement ;
    public $patients ;

    public function __construct(AppointementRepository $appointementRepository,
    PatientRepository $patientRepository,
    ) {
       
        $this->appointement = $appointementRepository;
        $this->patients = $patientRepository;
    }
   
    public function transactions(){

        $transactions = $this->appointement->all();

        return    view('dashboard.admin.transactions',compact("transactions"));

    }
    public function transactions_details($id){

        $transaction = $this->appointement->getById($id);
        return    view('dashboard.admin.transactions_details',compact("transaction"));

    }
    public function search(Request $request)
    {
        

        $query = $request->search;

        $transactions = $this->appointement->search($query);

        $patients = $this->patients->all();
         
       return view('dashboard.admin.transactions',compact(
            [
                "transactions",
                "patients",
               
            ]));
        
    }
}
