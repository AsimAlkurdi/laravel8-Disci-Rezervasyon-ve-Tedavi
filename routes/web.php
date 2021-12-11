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

Route::get('/', [App\Http\Controllers\front\HomeController::class, 'index']);
Route::get('/admin', [App\Http\Controllers\admin\HomeController::class, 'index']);
Route::get('/admin/treatments', [App\Http\Controllers\admin\HomeController::class, 'treatments']);

//treatment işlemleri
Route::get('/admin/treatments', [App\Http\Controllers\admin\treatmentController::class, 'index']);
Route::get('/admin/treatments/edit/{id}', [App\Http\Controllers\admin\treatmentController::class, 'edit']);
Route::get('/admin/treatments/destroy/{id}', [App\Http\Controllers\admin\treatmentController::class, 'destroy']);
Route::get('/admin/treatments/show/{id}', [App\Http\Controllers\admin\treatmentController::class, 'show']);
Route::post('/admin/treatments/create', [App\Http\Controllers\admin\treatmentController::class, 'create']);
Route::post('/admin/treatments/update/{id}', [App\Http\Controllers\admin\treatmentController::class, 'update']);
Route::get('/admin/treatments/add', [App\Http\Controllers\admin\treatmentController::class, 'create']);

