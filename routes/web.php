<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// admin pages
route::view('/admin','dashboard.admin.admin_dashboard')->name('admin.admin_dashboard');
route::view('/statistics','dashboard.admin.statistics')->name('admin.statistics');
route::view('/patients','dashboard.admin.patients')->name('admin.patients');
route::view('/appointements','dashboard.admin.appointements')->name('admin.appointements');
route::view('/appointement_details','dashboard.admin.appointement_details')->name('admin.appointement_details');
route::view('/doctors','dashboard.admin.doctors')->name('admin.doctors');
route::view('/admin-profile','dashboard.admin.profile')->name('admin.profile');



// docotor pages
route::view('/doctor-dashboard','dashboard.doctor.doctor_dashboard')->name('doctor.doctor_dashboard');
route::view('/doctor-statistics','dashboard.doctor.statistics')->name('doctor.statistics');
route::view('/doctors','dashboard.doctor.doctors')->name('doctor.doctors');
route::view('/patient_details','dashboard.doctor.patient_details')->name('doctor.patient_details');
route::view('/doctor-visits','dashboard.doctor.visits')->name('doctor.visits');
route::view('/doctor-visits_details','dashboard.doctor.visits_details')->name('doctor.visits_details');
route::view('/patient_details','dashboard.doctor.patient_details')->name('doctor.patient_details');
route::view('/doctor-appointements','dashboard.doctor.appointements')->name('doctor.appointements');
route::view('/doctor-appointement_details','dashboard.doctor.appointement_details')->name('doctor.appointement_details');
route::view('/holidays','dashboard.doctor.holidays')->name('doctor.holidays');
route::view('/live_consultations','dashboard.doctor.live_consultations')->name('doctor.live_consultations');
route::view('/schedule','dashboard.doctor.schedule')->name('doctor.schedule');
route::view('/doctor-transactions','dashboard.doctor.transactions')->name('doctor.transactions');
route::view('/doctor-transactions_details','dashboard.doctor.transactions_details')->name('doctor.transactions_details');
route::view('/doctor-profile','dashboard.doctor.profile')->name('doctor.profile');

// patient pages
route::view('/patient-dashboard','dashboard.patient.patient_dashboard')->name('patient.patient_dashboard');
route::view('/patient-statistics','dashboard.patient.statistics')->name('patient.statistics');
route::view('/patients','dashboard.patient.patients')->name('patient.patients');
route::view('/doctor_details','dashboard.patient.doctor_details')->name('patient.doctor_details');
route::view('/patient-appointements','dashboard.patient.appointements')->name('patient.appointements');
route::view('/patient-appointement_details','dashboard.patient.appointement_details')->name('patient.appointement_details');
route::view('/patient-profile','dashboard.patient.profile')->name('patient.profile');
route::view('/reviews','dashboard.patient.reviews')->name('patient.reviews');
route::view('/live_consultations','dashboard.patient.live_consultations')->name('patient.live_consultations');
route::view('/patient-transactions','dashboard.patient.transactions')->name('patient.transactions');
route::view('/patient-transactions_details','dashboard.patient.transactions_details')->name('patient.transactions_details');
route::view('/patient-visits','dashboard.patient.visits')->name('patient.visits');
route::view('/patient-visits_details','dashboard.patient.visits_details')->name('patient.visits_details');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
