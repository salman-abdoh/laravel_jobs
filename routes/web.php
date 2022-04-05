<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CallController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\CvController;

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

// Route::get('/', function () {
//     return view('web/index');
// });
Route::get('/', [IndexController::class,'index']);
Route::get('/company', [CompanyController::class,'company']);
Route::get('/detailsjob', [DetailsController::class,'details']);
Route::get('/job', [JobController::class,'job']);
Route::get('/about',[AboutController::class,'about']);
Route::get('/call',[CallController::class,'call']);
Route::get('/cv',[CvController::class,'cv']);
Route::get('/call',[ServicesController::class,'services']);
Route::get('/login', [LoginController::class,'login']);
Route::get('/sinup',[SignupController::class,'sinup']);




