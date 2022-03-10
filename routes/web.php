<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
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




Route::post("submit",[userController::class,'submit']);
Route::get('/data',[userController::class,'view']);
Route::get('edit/{id}',[userController::class,'showData']);
Route::get('delete/{id}',[userController::class,'destroy']);