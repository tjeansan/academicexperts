<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PublicationsController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\AcademicQualificationsController;
use App\Http\Controllers\ProfQualificationsController;
use App\Http\Controllers\AwardsController;

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

Route::get('/', [ProfilesController::class,'home']);

Route::get('/publications', [PublicationsController::class,'index'])->name('publications.index');
Route::get('/academics',[ProfilesController::class,'getAll'])->name('profiles.search');


Auth::routes();

Route::get('/profile/{user}',[ProfilesController::class,'index'])->name('profile.show');
Route::get('/profile/edit/{user}',[ProfilesController::class,'edit'])->middleware('auth')->name('profile.edit');
Route::patch('/profile/{user}',[ProfilesController::class,'update'])->name('profile.update');

Route::middleware('auth')->group(function (){

    Route::get('/p/create',[PublicationsController::class,'create']);
    Route::post('/p',[PublicationsController::class,'store']);

    Route::get('/r/create',[ResearchController::class,'create']);
    Route::post('/r',[ResearchController::class,'store']);

    Route::get('/aq/create',[AcademicQualificationsController::class,'create']);
    Route::post('/aq',[AcademicQualificationsController::class,'store']);

    Route::get('pq/create',[ProfQualificationsController::class,'create']);
    Route::post('/pq',[ProfQualificationsController::class,'store']);

    Route::get('/a/create',[AwardsController::class,'create']);
    Route::post('/a',[AwardsController::class,'store']);

});
