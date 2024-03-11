<?php

use App\Http\Controllers\ClientsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;



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

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
Route::get('/allclients',[ClientsController::class, 'index'])->name('allclients');
Route::post('/saveclient',[ClientsController::class, 'saveclient'])->name('saveclient');
