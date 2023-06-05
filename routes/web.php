<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\API\SocialAuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Lang\LangController;
use Stichoza\GoogleTranslate\GoogleTranslate;

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




Route::get('locale/{lang}', [LangController::class,'switchLang']);

Route::controller(WebsiteController::class)->group(function(){

    route::get('/team','team')->name('ourteam');
    route::get('/contact','contact')->name('contact');
    route::get('/about','about')->name('about');
    route::get('/services','services')->name('services');
    route::get('/appointement','appointement')->name('appointement');
    route::get('/thankyou','thankyou');

    // store contact
    route::post('/contact','StoreContact')->name('store.contact');
});

// Routes Admin Dashboard
Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'admin'], function () {
        
    Route::controller(AdminController::class)->group(function (){
        Route::get('/statistics', 'statistics')->name('admin.statistics');
        Route::get('/staff', 'staff')->name('admin.staff');
        Route::get('/patients', 'patients')->name('admin.patients');
        
        Route::get('/doctors', 'doctors')->name('admin.doctors');
        Route::get('/doctors/details/{id}', 'doctor_details')->name('admin.doctor_details');

        Route::get('/appointements', 'appointements')->name('admin.appointements');
        Route::get('/appointement_details', 'appointement_details')->name('admin.appointement_details');
        Route::get('/profile', 'profile')->name('admin.profile');
        Route::get('/services', 'services')->name('admin.services');
        Route::get('/specializations', 'specializations')->name('admin.specializations');
        Route::get('/subscribers', 'subscribers')->name('admin.subscribers');
        Route::get('/transactions', 'transactions')->name('admin.transactions');
        Route::get('/transactions_details', 'transactions_details')->name('admin.transactions_details');
        Route::get('/visits', 'visits')->name('admin.visits');
        Route::get('/visits_details', 'visits_details')->name('admin.visits_details');
        Route::get('/settings', 'settings')->name('admin.settings');
    
        // crud
        Route::post('/doctors/create', 'store')->name('admin.store');
        Route::get('/doctors/{id}', 'edit')->name('admin.edit');
        Route::get('/search', 'search')->name('admin.search');
        Route::get('/filter', 'filter')->name('admin.filter');
        Route::put('/doctors/edit/{id}', 'update')->name('admin.update');
        Route::delete('{id}', 'delete')->name('admin.delete');

    });


});


// Routes doctor dashboard

Route::group(['middleware' => ['auth', 'isDoctor'], 'prefix' => 'doctor'], function () {
    
    
    Route::controller(DoctorController::class)->group(function (){
        Route::get('/statistics', 'statistics')->name('doctor.statistics');
        Route::get('/patient_details', 'patient_details')->name('doctor.patient_details');
        Route::get('/doctors', 'doctors')->name('doctor.doctors');
        Route::get('/appointements', 'appointements')->name('doctor.appointements');
        Route::get('/appointement_details', 'appointement_details')->name('doctor.appointement_details');
        Route::get('/profile', 'profile')->name('doctor.profile');
        Route::get('/holidays', 'holidays')->name('doctor.holidays');
        Route::get('/transactions', 'transactions')->name('doctor.transactions');
        Route::get('/transactions_details', 'transactions_details')->name('doctor.transactions_details');
        Route::get('/visits', 'visits')->name('doctor.visits');
        Route::get('/visits_details', 'visits_details')->name('doctor.visits_details');
        Route::get('/schedule', 'schedule')->name('doctor.schedule');
        Route::get('/live_consultations', 'live_consultations')->name('doctor.live_consultations');
    
    });


});

// Routes Patient dashboard

Route::group(['middleware' => ['auth', 'isPatient'], 'prefix' => 'patient'], function () {
    
    
    Route::controller(PatientController::class)->group(function (){
        Route::get('/statistics', 'statistics')->name('patient.statistics');
        Route::get('/appointements', 'appointements')->name('patient.appointements');
        Route::get('/appointement_details', 'appointement_details')->name('patient.appointement_details');
        Route::get('/doctor_details', 'doctor_details')->name('patient.doctor_details');
        Route::get('/live_consultations', 'live_consultations')->name('patient.live_consultations');
        Route::get('/patients', 'patients')->name('patient.patients');
        Route::get('/profile', 'profile')->name('patient.profile');
        Route::get('/reviews', 'reviews')->name('patient.reviews');
        Route::get('/transactions', 'transactions')->name('patient.transactions');
        Route::get('/transactions_details', 'transactions_details')->name('patient.transactions_details');
        Route::get('/visits', 'visits')->name('patient.visits');
        Route::get('/visits_details', 'visits_details')->name('patient.visits_details');
    
    });


});




Route::get('/home',[AuthController::class,'index'])->middleware(['auth','verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
