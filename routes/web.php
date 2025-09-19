<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SittingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestimonialController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

/*
**Front Route
*/

Route::name('front.')->controller(FrontController::class)->group(function () {
    //Home
    Route::post('/subscriber', 'subscriber')->name('subscriber');
    Route::get('/', 'index')->name('index');

    //About
    Route::get('/about', 'about')->name('about');

    //Contact
    Route::post('/contact/store', 'contactStore')->name('contact.store');
    Route::get('/contact', 'contact')->name('contact');

    //Service
    Route::get('/service', 'service')->name('service');
});


/*
**Admin Route
*/
Route::name('admin.')->prefix(LaravelLocalization::setLocale() . '/admin')
    ->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->group(function () {
        Route::middleware('auth')->group(function () {
            //Home Page
            Route::view('/', 'admin.index')->name('index');

            //Service
            Route::resource('/service', ServiceController::class);

            //Feature
            Route::resource('/feature', FeatureController::class);

            //Message
            Route::resource('/message', MessageController::class)->only(['index', 'show', 'destroy']);

            //Subscribers
            Route::resource('/subscriber', SubscriberController::class)->only(['index', 'destroy']);

            //Testimonial
            Route::resource('/testimonial', TestimonialController::class);

            //Company
            Route::resource('/company', CompanyController::class);

            //Member
            Route::resource('/member', MemberController::class);

            //Sitting
            Route::resource('/setting', SettingController::class)->only(['index', 'update']);
        });
        require __DIR__ . '/auth.php';
    });
