<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index (){

        if(Auth::id()){
           if(auth()->user()->role === "admin"){
             return view('dashboard.admin.statistics');


           }
           elseif(auth()->user()->role === "doctor"){
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
}
