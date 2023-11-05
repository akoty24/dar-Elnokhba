<?php

use App\Http\Controllers\Front\ContactUsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {

            Auth::routes();

            Route::get('/contact_us', [ContactUsController::class, 'contact_us'])->name('contact_us');
            Route::post('/send_message', [ContactUsController::class, 'send_message'])->name('send_message');
            Route::get('/send-request', [HomeController::class,'send_request'])->name('send-request');
            Route::post('/submit-request', [HomeController::class,'submit_request'])->name('submit-request');

            Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
            Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

        });