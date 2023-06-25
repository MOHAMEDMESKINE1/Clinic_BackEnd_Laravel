<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index (){

        if(Auth::id() && Auth::check() ){
          
           if(auth()->user()->role === "admin"){
             
            return  redirect()->route('admin.statistics');
            // return  view('dashboard.admin.statistics');


           }
           elseif(auth()->user()->role === "doctor"){
            return  redirect()->route('doctor.statistics');
            // return view('dashboard.doctor.statistics');

           }
           elseif(auth()->user()->role === "patient"){
            // return  redirect()->route('patient.statistics');
            return view('dashboard.patient.statistics');

           }
        }else{
           return  view('auth.login');
        }
        abort('404');

        
    }
}
