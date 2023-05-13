<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// website
route::view('/team','website.ourteam')->name('ourteam');
route::view('/contact','website.contact')->name('contact');
route::view('/about','website.about')->name('about');
route::view('/services','website.services')->name('services');
route::view('/appointement','website.appointement')->name('appointement');
route::view('/thankyou','website.thankyou');

Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'admin','name'=>"admin."], function () {
        
    Route::controller(AdminController::class)->group(function (){
        Route::get('/statistics', 'statistics')->name('statistics');

        Route::get('/patients', 'patients')->name('patients');
        Route::get('/doctors', 'doctors')->name('doctors');
        Route::get('/appointements', 'appointements')->name('appointements');
        Route::get('/appointement_details', 'appointement_details')->name('appointement_details');
        Route::get('/profile', 'profile')->name('profile');
    
    });


});
// Route::group(['middleware' => ['auth', 'isAdmin'],'name'=>"admin."], function () {     
//     Route::get('/home',[AdminController::class,'index']);

// });

// Routes for the doctor dashboard

Route::group(['middleware' => ['auth', 'isDoctor'], 'prefix' => 'doctor','name'=>"doctor."], function () {
    
    
    Route::controller(DoctorController::class)->group(function (){
        Route::get('/statistics', 'statistics')->name('statistics');

        Route::get('/patient_details', 'patient_details')->name('patient_details');
        Route::get('/doctors', 'doctors')->name('doctors');
        Route::get('/appointements', 'appointements')->name('appointements');
        Route::get('/appointement_details', 'appointement_details')->name('appointement_details');
        Route::get('/profile', 'profile')->name('profile');
        Route::get('/holidays', 'holidays')->name('holidays');
        Route::get('/transactions', 'transactions')->name('transactions');
        Route::get('/transactions_details', 'transactions_details')->name('transactions_details');
        Route::get('/visits', 'visits')->name('visits');
        Route::get('/visits_details', 'visits_details')->name('visits_details');
        Route::get('/schedule', 'schedule')->name('schedule');
        Route::get('/live_consultations', 'live_consultations')->name('live_consultations');
    
    });


});

// Routes for the Patient dashboard

Route::group(['middleware' => ['auth', 'isPatient'], 'prefix' => 'patient','name'=>"patient."], function () {
    
    
    Route::controller(PatientController::class)->group(function (){
       
        Route::get('/appointements', 'appointements')->name('appointements');
        Route::get('/appointement_details', 'appointement_details')->name('appointement_details');
        Route::get('/doctor_details', 'doctor_details')->name('doctor_details');
        Route::get('/live_consultations', 'live_consultations')->name('live_consultations');
        Route::get('/patients', 'patients')->name('patients');
        Route::get('/profile', 'profile')->name('profile');
        Route::get('/reviews', 'reviews')->name('reviews');
        Route::get('/statistics', 'statistics')->name('statistics');
        Route::get('/transactions', 'transactions')->name('transactions');
        Route::get('/transactions_details', 'transactions_details')->name('transactions_details');
        Route::get('/visits', 'visits')->name('visits');
        Route::get('/visits_details', 'visits_details')->name('visits_details');
    
    });


});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home',[AuthController::class,'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
