<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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




// docotor pages
route::view('/doctor','dashboard.doctor.doctor_dashboard')->name('doctor.doctor_dashboard');
route::view('/doctor/dashboard','dashboard.doctor.statistics')->name('doctor.statistics');
route::view('/doctors','dashboard.doctor.doctors')->name('doctor.doctors');
route::view('/doctor/patient_details','dashboard.doctor.patient_details')->name('doctor.patient_details');
route::view('/doctor/visits','dashboard.doctor.visits')->name('doctor.visits');
route::view('/doctor/visits_details','dashboard.doctor.visits_details')->name('doctor.visits_details');
route::view('/doctor/appointements','dashboard.doctor.appointements')->name('doctor.appointements');
route::view('/doctor/appointement_details','dashboard.doctor.appointement_details')->name('doctor.appointement_details');
route::view('/doctor/holidays','dashboard.doctor.holidays')->name('doctor.holidays');
route::view('/doctor/live_consultations','dashboard.doctor.live_consultations')->name('doctor.live_consultations');
route::view('/doctor/schedule','dashboard.doctor.schedule')->name('doctor.schedule');
route::view('/doctor/transactions','dashboard.doctor.transactions')->name('doctor.transactions');
route::view('/doctor/transactions_details','dashboard.doctor.transactions_details')->name('doctor.transactions_details');
route::view('/doctor/profile','dashboard.doctor.profile')->name('doctor.profile');

// patient pages
route::view('/patient','dashboard.patient.patient_dashboard')->name('patient.patient_dashboard');
route::view('/patients','dashboard.patient.patients')->name('patient.patients');

route::view('/patient/dashboard','dashboard.patient.statistics')->name('patient.statistics');
route::view('/patient/doctor_details','dashboard.patient.doctor_details')->name('patient.doctor_details');
route::view('/patient/appointements','dashboard.patient.appointements')->name('patient.appointements');
route::view('/patient/appointement_details','dashboard.patient.appointement_details')->name('patient.appointement_details');
route::view('/patient/profile','dashboard.patient.profile')->name('patient.profile');
route::view('/patient/reviews','dashboard.patient.reviews')->name('patient.reviews');
route::view('/patient/live_consultations','dashboard.patient.live_consultations')->name('patient.live_consultations');
route::view('/patient/transactions','dashboard.patient.transactions')->name('patient.transactions');
route::view('/patient/transactions_details','dashboard.patient.transactions_details')->name('patient.transactions_details');
route::view('/patient/visits','dashboard.patient.visits')->name('patient.visits');
route::view('/patient/visits_details','dashboard.patient.visits_details')->name('patient.visits_details');



// Routes for the admin dashboard

Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'admin','name'=>"admin"], function () {
    
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/patients', [AdminController::class, 'patients'])->name('patients');
    Route::get('/doctors', [AdminController::class, 'doctors'])->name('doctors');
    Route::get('/appointements', [AdminController::class, 'appointements'])->name('appointements');
    Route::get('/appointement_details', [AdminController::class, 'appointement_details'])->name('appointement_details');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::get('/statistics', [AdminController::class, 'statistics'])->name('statistics');
    


});

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin/dashboard', function () {
//         return view('dashboard.admin.statistics');
//     })->name('admin.dashboard');
// });


// Routes for the doctor dashboard
// Route::middleware(['auth', 'doctor'])->group(function () {
//     Route::get('/doctor/dashboard', function () {
//         return view('dashboard.doctor.statistics');
//     })->name('doctor.dashboard');
// });

// Routes for the patient dashboard
// Route::middleware(['auth', 'patient'])->group(function () {
//     Route::get('/patient/dashboard', function () {
//         return view('dashboard.patient.statistics');
//     })->name('patient.dashboard');
// });

// Route::group(['middleware' => ['auth', 'admin']], function () {
//     // admin routes
//     // Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
//     route::view('/admin/dashboard','dashboard.admin.statistics')->name('admin.statistics');

    
// });

// Route::group(['middleware' => ['auth', 'doctor']], function () {
//     // doctor routes
//     // Route::get('/doctor/dashboard', [DoctorController::class, 'dashboard']);
//     route::view('/doctor/dashboard','dashboard.doctor.statistics')->name('doctor.statistics');

// });

// Route::group(['middleware' => ['auth', 'patient']], function () {
//     // patient routes
//     // Route::get('/patient/dashboard', [PatientController::class, 'dashboard']);
//     route::view('/patient/dashboard','dashboard.patient.statistics')->name('patient.statistics');

// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home',[AdminController::class ,'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
