<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\JobsController;
use App\Http\Controllers\admin\aboutsController;
use App\Http\Controllers\admin\companysController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\admin\ContactsController;
use App\Http\Controllers\admin\adsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\Admin\SettingsController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



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
Route::get('/job', [JobController::class,'index']);
Route::get('/about',[AboutController::class,'about']);
// Route::get('/call',[CallController::class,'call']);
Route::get('/cv',[CvController::class,'cv']);
Route::get('/services',[ServiceController::class,'services']);
// Route::get('/login', [AuthController::class,'show']);
// Route::get('/signup',[SignupController::class,'sinup']);
Route::group([
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],function(){


    
Route::get('/signup',[AuthController::class,'createUser'])->name('create_user');
Route::post('/save_user',[AuthController::class,'register'])->name('save_user');
Route::post('/do_login',[AuthController::class,'login'])->name('do_login');

Route::get('/',[IndexController::class,'index'])->name('/');

Route::get('/show_all_users',[AuthController::class,'listAll'])->name("show_users");





});
Route::get('/generate_roles',[SettingsController::class,'generateRoles'])->name('generate_roles');

Route::get('/signup',[AuthController::class,'createUser'])->name('create_user');
Route::post('/save_user',[AuthController::class,'register'])->name('save_user');
Route::get('/login',[AuthController::class,'showLogin'])->name('login');
Route::resource('/call',ContactsController::class);

Route::prefix('dashboard')->group(function () {
    Route::resource('/skills',SkillController::class);
    Route::resource('/jobs',JobsController::class);
    Route::resource('/about',aboutsController::class);
    Route::resource('/company',companysController::class);
    Route::resource('/ads',adsController::class);
    Route::resource('/services',ServicesController::class);
    Route::resource('/call',ContactsController::class);


});


