<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneAppController;
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

Route::get('/', function () {

    return view('welcome');

})->name('welcome');

Route::get('/login', function () {

    return view('auth.login');

})->name('login');

Route::get('/signup', function () {

    return view('auth.register');

})->name('signup');

Route::get('/profile', function () {
    return view('profile.index');
});

Route::get('/tuwaiq', function () {
    return view('tuwaiq');
})->name('tuwaiq');



Route::get('/test', function () {
    return "Test";
});


Route::get('/phones',[PhoneAppController::class,"index"])->name('phone');

Route::get('/phonesdisplay',[PhoneAppController::class,"phonesDisplay"])->name('phonesDisplay');


Route::get('/oldphones',[PhoneAppController::class,"oldPhones"])->name('oldPhones');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/getphones',[PhoneAppController::class,"getPhonesData"])->name('getPhones');

Route::get('/checkout/{id}',[PhoneAppController::class,"checkout"])->name('checkout');

Route::post('/invoice',[PhoneAppController::class,"getInvoice"])->name('invoice');
