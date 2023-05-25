<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
   
    public function patients(){
        
        return    view('dashboard.admin.patients');
    }

    public function doctors(){
        
        return    view('dashboard.admin.doctors');

    }
    public function staff(){
        
        return    view('dashboard.admin.staff');

    }
    public function appointements(){
        
        return    view('dashboard.admin.appointements');
    }
    public function profile(){

        return    view('dashboard.admin.profile');

    }
    public function appointement_details(){

        return    view('dashboard.admin.appointement_details');

    }
    public function statistics(){
        return    view('dashboard.admin.statistics');

    }
    public function subscribers(){
        return    view('dashboard.admin.subscribers');

    }
    public function visits(){
        return    view('dashboard.admin.visits');

    }
    public function visits_details(){
        return    view('dashboard.admin.visits_details');

    }
    public function transactions(){
        return    view('dashboard.admin.transactions');

    }
    public function transactions_details(){
        return    view('dashboard.admin.transactions_details');

    }
    
    public function specializations(){
        return    view('dashboard.admin.specializations');

    }
    public function services(){
        return    view('dashboard.admin.services');

    }
    public function settings(){
        return    view('dashboard.admin.settings');

    }
 
}
