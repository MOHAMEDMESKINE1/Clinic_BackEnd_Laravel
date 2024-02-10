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


Route::controller(StripeController::class)->group(function(){
    Route::get('stripe', 'stripe')->name("stripe");
    Route::post('stripe', 'stripePost')->name('stripe.post');
})->middleware("guest");

Route::get('locale/{lang}', [LangController::class,'switchLang']);




Route::post('/subscribers',[SubscriberController::class,'store'])->name('store_subscribers');






Route::get('/home',[AuthController::class,'index'])->middleware(['auth','verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/website.php';

require __DIR__.'/admin.php';

require __DIR__.'/doctor.php';

require __DIR__.'/patient.php';

require __DIR__.'/auth.php';
