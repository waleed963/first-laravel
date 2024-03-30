<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrphansController;
use App\Http\Controllers\BailsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LangController;


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


Route::get('/lang/{lang}', [LangController::class,'change']);

// Route::prefix('dashboard')->middleware('auth')->group(function () {
//     Route::get('/', function () {
//         return view('index');
//     });
 
//     Route::get('/home', function () {
//         return view('index');
//     });
//     Route::resource('orphans', OrphansController::class);
//     Route::resource('bails', BailsController::class);
//     Route::resource('users', UsersController::class);
// });
Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

Route::resource('orphans', OrphansController::class);
Route::resource('bails', BailsController::class);
Route::resource('users', UsersController::class);







Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
