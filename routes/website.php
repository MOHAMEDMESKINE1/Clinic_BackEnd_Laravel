<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::controller(WebsiteController::class)->group(function(){

    route::get('/team','team')->name('ourteam');
    route::get('/contact','contact')->name('contact');
    route::get('/about','about')->name('about');
    route::get('/services','services')->name('services');
    route::get('/appointement','appointement')->name('appointement');
    route::get('/thankyou','thankyou');

    // store contact
    route::post('/contact','StoreContact')->name('store.contact');

    // store appointement
    route::post('/appointement','StoreAppointement')->name('store.appointement');

});