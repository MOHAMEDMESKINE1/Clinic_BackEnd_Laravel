<?php

namespace App\Http\Controllers\QRLogin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class QrLoginController extends Controller
{
    public function checkUser(Request $request) {
        $result =0;
           if ($request->data) {
               $user = User::where('name',$request->data)->first();
               if ($user) {
                   Auth::login($user);
                   $result =1;
                }else{
                    $result =0;
                }
           }
           return $result;
   }
}
