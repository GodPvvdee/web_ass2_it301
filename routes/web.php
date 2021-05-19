<?php

use App\Http\Controllers\SailorController;
use App\Http\Controllers\ServiceHistoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin', 'auth']], function(){
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('sailor', [SailorController::class, 'index'])->name('sailor.index');
    Route::get('company', [AdminController::class, 'company'])->name('admin.company');
    Route::get('company/{id}', [AdminController::class, 'search'])->name('admin.search');
    Route::get('vessel', [AdminController::class, 'vessel'])->name('admin.vessel');
    Route::get('jobs', [AdminController::class, 'joblist'])->name('admin.joblist');
    Route::get('jobsearch/{id}', [AdminController::class, 'jobsearch'])->name('admin.jobsearch');
    Route::post('jobsearch/{id}', [AdminController::class, 'burtgeh'])->name('admin.burtheh');
    Route::get('history', [ServiceHistoryController::class, 'index'])->name('admin.history');
    Route::get('sailor/create', [SailorController::class, 'create'])->name('sailor.create');

    Route::post('sailor/store', [SailorController::class, 'store'])->name('sailor.store');
});

Route::group(['prefix'=>'user', 'middleware'=>['isUser', 'auth']], function(){
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('profile/{id}', [UserController::class, 'profile'])->name('user.profile');
    Route::get('settings', [UserController::class, 'settings'])->name('user.settings');
});
Route::group(['prefix'=>'company', 'middleware'=>['isCompany', 'auth']], function(){
    Route::get('company', [CompanyController::class, 'index'])->name('company.index');
    Route::get('profile', [CompanyController::class, 'profile'])->name('company.profile');
    Route::get('application', [CompanyController::class, 'application'])->name('company.application');
    Route::post('application', [CompanyController::class, 'create'])->name('company.create');
});
