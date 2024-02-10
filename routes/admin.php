<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\Visit\VisitController;
use App\Http\Controllers\Patient\PatientController;
use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\Subscriber\SubscriberController;
use App\Http\Controllers\Transaction\TransactionController;
use App\Http\Controllers\Appointement\AppointementController;
use App\Http\Controllers\Specialization\SpecializationController;
// Routes Admin Dashboard
Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'admin'], function () {
        
    Route::controller(AdminController::class)->group(function (){
        
        // Route::get('/staff', 'staff')->name('admin.staff');
        // Route::get('/staff/search/', 'search_staff')->name('admin.search_staff');

        Route::get('/statistics', 'all')->name('admin.statistics');
        Route::get('/doctors', 'doctors')->name('admin.doctors');
        Route::get('/doctors/details/{id}', 'doctor_details')->name('admin.doctor_details');

        Route::get('/profile', 'profile')->name('admin.profile');
        Route::get('/settings', 'settings')->name('admin.settings');
    
        // crud doctor
        Route::get('/doctors/create', 'create')->name('admin.create');
        Route::get('/doctors/{id}', 'edit')->name('admin.edit');
        Route::get('/search', 'search')->name('admin.search');
        Route::get('/filter', 'filter')->name('admin.filter');
        
        Route::post('/doctors/create', 'store')->name('admin.store');
        Route::put('/doctors/edit/{id}', 'update')->name('admin.update');
        Route::delete('/doctors/{id}', 'delete')->name('admin.delete');



    });

   
    Route::controller(StaffController::class)->group(function (){


        Route::get('/staff', 'staff')->name('admin.staff');

        // crud staff
        Route::get('/staff/search', 'search')->name('admin.search_staff');
        Route::get('/staff/{id}', 'edit')->name('admin.edit_staff');
        Route::put('/staff/edit/{id}', 'update')->name('admin.update_staff');
        Route::put('/staff/editRole/{id}', 'updateRole')->name('admin.update_staffRole');
        Route::delete('/staff/{id}', 'deleteStaff')->name('admin.delete_staff');


    });

    Route::controller(SpecializationController::class)->group(function (){


        Route::get('/specializations', 'all')->name('admin.specializations');

        // crud specialization
        Route::get('/specialization/search', 'search')->name('admin.search_specialization');
        Route::get('/specialization/filter', 'filter')->name('admin.filter_specialization');
        
        Route::post('/specialization/create', 'store')->name('admin.store_specialization');
        Route::get('/specialization/{id}', 'edit')->name('admin.edit_specialization');
        Route::put('/specialization/edit/{id}', 'update')->name('admin.update_specialization');
        Route::delete('/specialization/{id}', 'delete')->name('admin.delete_specialization');


    });
    
    Route::controller(PatientController::class)->group(function (){


        Route::get('/patients', 'patients')->name('admin.patients');
        Route::get('/patients/details/{id}', 'patients_details')->name('admin.patients_details');

        // crud patient
        Route::get('/patients/search', 'search')->name('admin.search_patients');
        
        Route::post('/patients/create', 'store')->name('admin.store_patients');
        Route::get('/patients/{id}', 'edit')->name('admin.edit_patients');
        Route::put('/patients/edit/{id}', 'update')->name('admin.update_patients');
        Route::delete('/patients/{id}', 'delete')->name('admin.delete_patient');

        // Route::get('/resend-verification', 'resend')->name('resend-verification');
        // Route::post('/verification/verify', 'verify')->name('verification.verify');

    });
    Route::controller(AppointementController::class)->group(function (){

        Route::get('/appointements/export', 'export_appointments')->name('admin.export_appointments');

        Route::get('/appointements', 'appointements')->name('admin.appointements');
        Route::get('/appointements/details/{id}', 'appointements_details')->name('admin.appointements_details');

        // crud appointement
        Route::get('/appointements/search', 'search')->name('admin.search_appointements');
        Route::get('/appointements/filter', 'filter')->name('admin.filter_appointements');
        
        Route::post('/appointements/create', 'store')->name('admin.store_appointements');
        Route::get('/appointements/details/{id}', 'appointements_details')->name('admin.appointements_details');
        Route::delete('appointements/{id}', 'delete')->name('admin.delete_appointements');


    });
   
    Route::controller(TransactionController::class)->group(function (){

        Route::get('/transactions', 'transactions')->name('admin.transactions');
        Route::get('/transactions/details/{id}', 'transactions_details')->name('admin.transactions_details');
        Route::get('/transactions/search', 'search')->name('admin.search_transactions');
    });

    Route::controller(ServiceController::class)->group(function (){


        Route::get('/services', 'services')->name('admin.services');

        // crud appointement
        Route::get('/services/search', 'search')->name('admin.search_services');
        Route::get('/services/edit/{id}', 'edit')->name('admin.edit_services');
        Route::post('/services/create', 'store')->name('admin.store_services');
        Route::put('/services/{id}', 'update')->name('admin.update_services');

        Route::delete('services/{id}', 'delete')->name('admin.delete_services');


    });
    Route::controller(SubscriberController::class)->group(function (){


        Route::get('/subscribers', 'subscribers')->name('admin.subscribers');

        // crud appointement
        Route::get('/subscribers/search', 'search')->name('admin.search_subscribers');

        Route::delete('subscribers/{id}', 'delete')->name('admin.delete_subscribers');


    });
    Route::controller(VisitController::class)->group(function (){


        Route::get('/visits', 'visits')->name('admin.visits');

        Route::get('/visits/export', 'export_visits')->name('admin.export_visits');

        // crud visits
        Route::get('/visits/search', 'search')->name('admin.search_visits');
        Route::get('/visits/details/{id}', 'visits_details')->name('admin.visits_details');
        Route::post('/visits/create', 'store')->name('admin.store_visits');
        Route::get('/visits/{id}', 'edit')->name('admin.edit_visits');
        Route::put('/visits/edit/{id}', 'update')->name('admin.update_visits');
        Route::delete('visits/{id}', 'delete')->name('admin.delete_visits');


    });

  
});