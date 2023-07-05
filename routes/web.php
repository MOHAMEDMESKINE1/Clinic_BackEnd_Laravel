<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Lang\LangController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\Visit\VisitController;
use App\Http\Controllers\Review\ReviewController;
use App\Http\Controllers\Stripe\StripeController;
use App\Http\Controllers\Holiday\HolidayController;
use App\Http\Controllers\Patient\PatientController;
use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\Schedule\ScheduleController;
use App\Http\Controllers\Subscriber\SubscriberController;
use App\Http\Controllers\Transaction\TransactionController;
use App\Http\Controllers\Appointement\AppointementController;
use App\Http\Controllers\Specialization\SpecializationController;

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

    // store appointement
    route::post('/appointement','StoreAppointement')->name('store.appointement');

});

// Route::controller(StripeController::class)->group(function(){
//     Route::get('stripe', 'stripe')->name("patient.stripe");
//     Route::post('stripe', 'stripePost')->name('stripe.post');
// })->middleware("auth:guest");

Route::post('/subscribers',[SubscriberController::class,'store'])->name('store_subscribers');

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

// Routes Patient dashboard

Route::group(['middleware' => ['auth', 'isPatient'], 'prefix' => 'patient'], function () {
    
    
    Route::controller(PatientController::class)->group(function (){

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
        Route::delete('/reviews/{id}', 'delete')->name('patient.delete_reviews');
        Route::put('/reviews/update', 'update')->name('patient.update_reviews');
        Route::post('/reviews/create', 'store')->name('patient.store_reviews');

    });
    Route::controller(StripeController::class)->group(function(){
        Route::get('stripe', 'stripe')->name("patient.stripe");
        Route::post('stripe', 'stripePost')->name('stripe.post');
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
