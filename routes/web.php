<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home; 
use App\Http\Middleware\PoliceMan;
use Illuminate\Http\Request;
use App\Http\Controllers\JobsController;
use Illuminate\Config;
use Illuminate\Support\Facades\App;


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

Route::get('/jobs',[JobsController::class,'index'])->name('jobindex');
Route::get('/create',[JobsController::class,'create'])->name("createjob");
Route::post('/store',[JobsController::class,'store'])->name('storejob');
Route::get('/edit/{id}',[JobsController::class,'edit'])->name('editjob');
Route::post('/update/{id}',[JobsController::class,'update'])->name('updatejob');;
Route::get('/delete/{id}',[JobsController::class,'destroy'])->name('deletejob');
Route::post('/ajax_search',[JobsController::class,'ajax_search'])->name('ajax_search_job');
Route::get('languageConverter/{locale}',function($locale){
if(in_array($locale,['ar','en','fr'])){
  session()->put('locale',$locale);
}

return redirect()->back();
})->name('languageConverter');







