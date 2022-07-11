<?php

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

Route::get('/', function () {
    return view('top');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/design_all', [App\Http\Controllers\DesignAllController::class, 'design_all'])->name('design_all');
// userページ
Route::group(['prefix' => '/user'],function(){
Route::get('/{id}',  [App\Http\Controllers\UserController::class, 'show'])->name('show')->middleware('verified');
Route::post('/design_store',  [App\Http\Controllers\UserController::class, 'design_store'])->name('design_store')->middleware('verified');

});

// photo-site1ルート
Route::group(['prefix' => '/photo-site1'],function(){
Route::get('',  [App\Http\Controllers\DesignAllController::class, 'photo_site1'])->name('photo_site1')->middleware('verified');

});
// photo-site2ルート
Route::group(['prefix' => '/photo-site2'],function(){
Route::get('',  [App\Http\Controllers\DesignAllController::class, 'photo_site2'])->name('photo_site2')->middleware('verified');

});
// photo-site3ルート
Route::group(['prefix' => '/photo-site3'],function(){
Route::get('',  [App\Http\Controllers\DesignAllController::class, 'photo_site3'])->name('photo_site3')->middleware('verified');

});
