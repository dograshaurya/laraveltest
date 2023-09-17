<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\B2BDashboardController;
use App\Http\Controllers\B2CDashboardController;
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


Route::get('/purchase', function () {
    return view('purchase');
})->name('buy');

Route::get('/success', function () {
    return view('success');
});

Route::post('/purchase', [ProductController::class, 'purchase'])->name('purchase');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

/*------------------------------------------
All Admin Routes List
--------------------------------------------*/
Route::middleware(['auth', 'user-access:Admin'])->group(function () {
  
    Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
});
  
/*------------------------------------------
All B2C Routes List
--------------------------------------------*/
/*Route::middleware(['auth', 'user-access:2'])->group(function () {
  
    Route::get('/B2C/dashboard', [DashboardController::class, 'B2CDashboard'])->name('B2C.dashhboard');
});*/

Route::group(['middleware' => ['auth', 'user-access:B2C Customer']], function () {
    Route::get('b2c/dashboard', [B2CDashboardController::class, 'index'])->name('B2C.dashboard');
});

/*------------------------------------------
All B2B Routes List
--------------------------------------------*/
Route::middleware(['auth', 'user-access:B2B Customer'])->group(function () {
    Route::get('b2b/dashboard', [B2BDashboardController::class, 'index'])->name('B2B.dashboard');
});
