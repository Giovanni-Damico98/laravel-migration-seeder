<?php

use App\Http\Controllers\PassengerController;
use App\Http\Controllers\TrainsController;
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
// rotta che utilizza il metodo index attraverso la classe TrainsController
Route::get('/', [TrainsController::class, 'index']);

Route::get('/passengers', [PassengerController::class, 'index']);