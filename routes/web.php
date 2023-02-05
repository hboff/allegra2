<?php

use App\Http\Controllers\OrteController;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;


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
Route::get('/schimmelpilz', [OrteController::class, 'schimmelpilz']);
Route::get('/', [OrteController::class, 'index']);
Route::get('/gewerbeimmobilien', [OrteController::class, 'gewerbeimmobilien']);
Route::get('/grundstuecke-und-rechte', [OrteController::class, 'grundstuecke']);
Route::get('/landwirtschaftliche-immobilien', [OrteController::class, 'landwirtschaftliche']);
Route::get('/sonderimmobilien', [OrteController::class, 'sonderimmobilien']);
Route::get('/wohnimmobilien', [OrteController::class, 'wohnimmobilien']);
Route::get('/verkehrswertverfahren', [OrteController::class, 'verkehrswertverfahren']);
Route::get('/sachwertverfahren', [OrteController::class, 'sachwertverfahren']);
Route::get('/ertragswertverfahren', [OrteController::class, 'ertragswertverfahren']);
Route::get('/ueber-uns', [OrteController::class, 'ueberuns']);
Route::get('/impressum', [OrteController::class, 'impressum']);
Route::get('/datenschutzerklaerung', [OrteController::class, 'datenschutzerklaerung']);

