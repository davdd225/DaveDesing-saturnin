<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\AboutustController;
use App\Http\Controllers\ClientController;

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
    return view('accueil');
});

Route::get('/accueil', [AccueilController::class, 'index']);

// Route::get('/studio', [AccueilController::class, 'show']);

Route::get('/studio',  [StudioController::class, 'index']);

Route::get('/aboutus',[AboutustController::class,'index']);

Route::get('/contact',[ClientController::class, 'index']);


