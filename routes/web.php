<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\MutualFundController;
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


Route::get('/', [IndexController::class, 'index']);
Route::get('/contact', [IndexController::class, 'contact']);
Route::post('/saveContact', [IndexController::class, 'saveContact']);
Route::get('/insurance', [InsuranceController::class, 'insurance']);
Route::get('/mutualFund', [MutualFundController::class, 'mutualFund']);
