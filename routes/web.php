<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\MutualFundController;
use Illuminate\Support\Facades\Route;
use App\Models\Service;


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

// Page Render

Route::get('/', [IndexController::class, 'index']);
$serviceUrls=Service::select('service_url')->where(['is_active'=>1])->get()->pluck('service_url')->toArray();
    foreach($serviceUrls as $url){
        Route::get('/'.$url, [IndexController::class, 'services']);
    }
Route::get('/about', [IndexController::class, 'about']);
Route::get('/insurance', [InsuranceController::class, 'insurance']);
Route::get('/mutualFund', [MutualFundController::class, 'mutualFund']);


// Backend API
Route::post('/saveContact', [IndexController::class, 'saveContact']);
