<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Review\ReviewController;
use App\Http\Controllers\Patient\PatientController;

// Routes Patient dashboard

Route::group(['middleware' => ['auth', 'isPatient'], 'prefix' => 'patient'], function () {
    
    
    Route::controller(PatientController::class)->group(function (){


        // 
        Route::get('/statistics', 'statistics')->name('patient.statistics');
        Route::get('/appointement_details/{id}', 'appointement_details')->name('patient.appointement_details');
        Route::get('/doctor_details/{id}', 'doctor_details')->name('patient.doctor_details');
       
        Route::get('/live_consultations', 'live_consultations')->name('patient.live_consultations');
        Route::get('/profile', 'profile')->name('patient.profile');
        
    
        
        Route::get('/appointements', 'appointements')->name('patient.appointements');
        
        // cancel appointement
        Route::put('/appointements/cancel/{id}', 'cancelAppointement')->name('patient.cancelAppointement');
        

        // crud appointement
        Route::get('/appointements/export', 'export_appointments')->name('patient.export_appointments');
        Route::get('/appointements/search', 'searchAppointement')->name('patient.search_appointements');
        Route::get('/appointements/filter', 'filterAppointement')->name('patient.filter_appointements');
        
        Route::post('/appointements/create', 'storeAppointement')->name('patient.store_appointements');
        Route::delete('appointements/{id}', 'deleteAppointement')->name('patient.delete_appointements');

        // transactions
        Route::get('/transactions', 'transactions')->name('patient.transactions');
        Route::get('/transactions/details/{id}', 'transactions_patients_details')->name('patient.transactions_details');
        Route::get('/transactions/search', 'searchTransaction')->name('patient.search_transactions');

        // visits
        Route::get('/visits', 'visits')->name('patient.visits');
        Route::get('/visits/export', 'export_visits')->name('patient.export_visits');
        Route::get('/visits/search', 'searchVisit')->name('patient.search_visits');
        Route::get('/visits/details/{id}', 'visits_details')->name('patient.visits_details');

    });

     
    Route::controller(ReviewController::class)->group(function (){

        Route::get('/reviews', 'reviews')->name('patient.reviews');
        Route::delete('/reviews/{id}', 'deleteReview')->name('patient.delete_reviews');
        Route::put('/reviews/update', 'update')->name('patient.update_reviews');
        Route::post('/reviews/create', 'store')->name('patient.store_reviews');

    });

});

