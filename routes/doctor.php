<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\Holiday\HolidayController;
use App\Http\Controllers\Schedule\ScheduleController;


// Routes doctor dashboard

Route::group(['middleware' => ['auth', 'isDoctor'], 'prefix' => 'doctor'], function () {
    
    
    Route::controller(DoctorController::class)->group(function (){

        Route::get('/statistics', 'statistics')->name('doctor.statistics');
        Route::get('/patient_details', 'patient_details')->name('doctor.patient_details');
       
        // doctors
        Route::get('/doctors', 'doctors')->name('doctor.doctors');
        Route::get('/doctor_details/{id}', 'doctor_details')->name('doctor.doctor_details');
       



        
        Route::get('/profile', 'profile')->name('doctor.profile');
        Route::get('/holidays', 'holidays')->name('doctor.holidays');

        Route::get('/live_consultations', 'live_consultations')->name('doctor.live_consultations');
    


        // appointements
        Route::get('/appointements', 'appointements')->name('doctor.appointements');
        Route::get('/appointement_details/{id}', 'appointements_details')->name('doctor.appointement_details');
        Route::get('/appointements/search', 'search')->name('doctor.search_appointements');
        Route::get('/appointements/filter', 'filter')->name('doctor.filter_appointements');
        Route::get('/appointements/export', 'export_appointments')->name('doctor.export_appointments');

        Route::post('/appointements/create', 'storeAppointement')->name('doctor.store_appointements');
        Route::delete('appointements/{id}', 'deleteAppointement')->name('doctor.delete_appointements');

        // transactions
        Route::get('/transactions', 'transactions')->name('doctor.transactions');
        Route::get('/transactions/details/{id}', 'transactions_details')->name('doctor.transactions_details');
        Route::get('/transactions/search', 'searchTransaction')->name('doctor.search_transactions');


        //visits
        Route::get('/visits', 'visits')->name('doctor.visits');
        Route::get('/visits_details/{id}', 'visits_details')->name('doctor.visits_details');
        Route::get('/visits/search', 'searchVisit')->name('doctor.search_visits');
        Route::get('/visits/export', 'export_visits')->name('doctor.export_visits');

        Route::post('/visits/create', 'storeVisit')->name('doctor.store_visits');
        Route::get('/visits/{id}', 'editVisit')->name('doctor.edit_visits');
        Route::put('/visits/edit/{id}', 'updateVisit')->name('doctor.update_visits');
        Route::delete('visits/{id}', 'deleteVisit')->name('doctor.delete_visits');


        
    });

    Route::controller(ScheduleController::class)->group(function (){

        Route::get('/schedules', 'schedules')->name('doctor.schedules');
        Route::get('/schedules_details/{id}', 'schedules_details')->name('doctor.schedules_details');
        Route::get('/schedules/search', 'search')->name('doctor.search_schedules');
        Route::get('/schedules/export', 'export_schedules')->name('doctor.export_schedules');

        Route::post('/schedules/create', 'store')->name('doctor.store_schedules');
        Route::get('/schedules/{id}', 'edit')->name('doctor.edit_schedules');
        Route::put('/schedules/edit/{id}', 'update')->name('doctor.update_schedules');
        Route::delete('schedules/{id}', 'delete')->name('doctor.delete_schedules');
    });

    Route::controller(HolidayController::class)->group(function (){

        Route::get('/holidays', 'holidays')->name('doctor.holidays');
        Route::get('/holidays/search', 'search')->name('doctor.search_holidays');
       
        Route::get('/holidays/filter', 'filter')->name('doctor.filter_holidays');
        Route::post('/holidays/create', 'store')->name('doctor.store_holidays');
        Route::delete('holidays/{id}', 'delete')->name('doctor.delete_holidays');
    });



});
