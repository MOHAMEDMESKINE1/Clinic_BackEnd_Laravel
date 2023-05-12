<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    public function index (){

        if(Auth::id()){
           if(auth()->user()->role === "admin"){
            // return redirect("/admin/dashboard");
             return view('dashboard.admin.statistics');


           }
           elseif(auth()->user()->role === "doctor"){
            // return redirect("/doctor/dashboard");
            return view('dashboard.doctor.statistics');

           }
           elseif(auth()->user()->role === "patient"){
            return view('dashboard.patient.statistics');

           }
        }else{
           return  view('auth.login');
        }
        abort('404');

        
    }
    public function patients(){
        
        return    view('dashboard.admin.patients');
    }

    public function doctors(){
        
        return    view('dashboard.admin.doctors');

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
}
