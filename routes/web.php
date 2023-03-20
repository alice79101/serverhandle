<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [\App\Http\Controllers\RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [\App\Http\Controllers\RegisterController::class, 'store'])->middleware('guest');


Route::get('login', [\App\Http\Controllers\SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sessions', [\App\Http\Controllers\SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [\App\Http\Controllers\SessionsController::class, 'destroy'])->middleware('auth');
Route::get('dashboard', function() {
    return view('dashboard');
})->middleware('auth');
//Route::get('dashboard', function () {
//    return view('dashboard');
//})->middleware('auth.login');
//
//Route::match(['get', 'post'], '/login', function() {
//    //...
//});
