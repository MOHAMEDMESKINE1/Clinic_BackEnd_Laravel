<?php

namespace App\Http\Controllers\Lang;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Stichoza\GoogleTranslate\GoogleTranslate;

class LangController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function switchLang($locale)
    {
       
        App::setlocale($locale);
        Session::put('locale', $locale);
        return redirect()->back();
    }
}
