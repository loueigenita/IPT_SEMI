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

Route::get('/',[App\Http\Controllers\StudentController::class,'index']);
Route::get('show-students',[App\Http\Controllers\StudentController::class,'show']);
Route::get('add-students',[App\Http\Controllers\StudentController::class,'add']);
Route::post('store-student',[App\Http\Controllers\StudentController::class,'store']);
