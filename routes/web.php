<?php

use App\Http\Controllers\TreatmentController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus', [App\Http\Controllers\front\HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [App\Http\Controllers\HomeController::class, 'references'])->name('references');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');
Route::post('/sendmessage', [App\Http\Controllers\HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/appointment/{id}', [App\Http\Controllers\HomeController::class, 'appointment'])->name('appointment');
Route::get('/categorytreatment/{id}', [App\Http\Controllers\HomeController::class, 'categorytreatment'])->name('categorytreatment');
Route::get('/makeappointment/{id}', [App\Http\Controllers\HomeController::class, 'makeappointment'])->name('makeappointment');









route::middleware('auth')->prefix('admin')->group(function (){
Route::get('/', [App\Http\Controllers\admin\HomeController::class, 'index'])->name('admin');

//treatment işlemleri
    Route::get('treatments', [App\Http\Controllers\admin\treatmentController::class, 'index']);

    Route::get('treatments/edit/{id}', [App\Http\Controllers\admin\treatmentController::class, 'edit']);
Route::get('treatments/destroy/{id}', [App\Http\Controllers\admin\treatmentController::class, 'destroy']);
Route::get('treatments/show/{id}', [App\Http\Controllers\admin\treatmentController::class, 'show']);
Route::post('treatments/create', [App\Http\Controllers\admin\treatmentController::class, 'store']);
Route::post('treatments/update/{id}', [App\Http\Controllers\admin\treatmentController::class, 'update']);
Route::get('treatments/add', [App\Http\Controllers\admin\treatmentController::class, 'create']);


//category işlemleri
Route::get('category', [App\Http\Controllers\admin\CategoryController::class, 'index']);
Route::get('category/edit/{id}', [App\Http\Controllers\admin\CategoryController::class, 'edit']);
Route::get('category/destroy/{id}', [App\Http\Controllers\admin\CategoryController::class, 'destroy']);
Route::get('category/show/{id}', [App\Http\Controllers\admin\CategoryController::class, 'show']);
Route::post('category/create', [App\Http\Controllers\admin\CategoryController::class, 'store']);
Route::get('category/add', [App\Http\Controllers\admin\CategoryController::class, 'create']);
Route::post('category/update/{id}', [App\Http\Controllers\admin\CategoryController::class, 'update']);



//doctors işlemleri
Route::get('doctors', [App\Http\Controllers\admin\DoctorController::class, 'index']);
Route::get('doctors/edit/{id}', [App\Http\Controllers\admin\DoctorController::class, 'edit']);
Route::get('doctors/destroy/{id}', [App\Http\Controllers\admin\DoctorController::class, 'destroy']);
Route::get('doctors/show/{id}', [App\Http\Controllers\admin\DoctorController::class, 'show']);
Route::post('doctors/create', [App\Http\Controllers\admin\DoctorController::class, 'store']);
Route::get('doctors/add', [App\Http\Controllers\admin\DoctorController::class, 'create']);
Route::post('doctors/update/{id}', [App\Http\Controllers\admin\DoctorController::class, 'update']);




//Faq işlemleri
Route::get('faq', [App\Http\Controllers\admin\FaqController::class, 'index'])->name('admin_faq');
Route::get('faq/edit/{id}', [App\Http\Controllers\admin\FaqController::class, 'edit'])->name('admin_message_edit');
Route::get('faq/destroy/{id}', [App\Http\Controllers\admin\FaqController::class, 'destroy'])->name('admin_faq_destroy');
Route::get('faq/show/{id}', [App\Http\Controllers\admin\FaqController::class, 'show'])->name('admin_faq_show');
Route::post('faq/create', [App\Http\Controllers\admin\FaqController::class, 'store'])->name('admin_faq_store');
Route::get('faq/add', [App\Http\Controllers\admin\FaqController::class, 'create'])->name('admin_faq_create');
Route::post('faq/update/{id}', [App\Http\Controllers\admin\FaqController::class, 'update'])->name('admin_faq_update');


//message işlemleri
Route::get('messages', [App\Http\Controllers\admin\MessageController::class, 'index'])->name('admin_message');
Route::get('messages/edit/{id}', [App\Http\Controllers\admin\MessageController::class, 'edit'])->name('admin_message_edit');
Route::get('messages/destroy/{id}', [App\Http\Controllers\admin\MessageController::class, 'destroy'])->name('admin_message_destroy');
Route::get('messages/show/{id}', [App\Http\Controllers\admin\MessageController::class, 'show'])->name('admin_message_show');
Route::post('messages/update/{id}', [App\Http\Controllers\admin\MessageController::class, 'update'])->name('admin_message_update');


//images işlemleri
    Route::prefix('image')->group(function (){
Route::get('delete/{id}/{treatment_id}', [App\Http\Controllers\admin\ImageController::class, 'destroy'])->name('admin_image_delete');
Route::get('show', [App\Http\Controllers\admin\ImageController::class, 'show'])->name('admin_image_show');
Route::post('store/{treatment_id}', [App\Http\Controllers\admin\ImageController::class, 'store'])->name('admin_image_store');
Route::get('create/{treatment_id}', [App\Http\Controllers\admin\ImageController::class, 'create'])->name('admin_image_add');
    });

//reviews işlemleri
    Route::prefix('review')->group(function (){
        Route::get('/', [App\Http\Controllers\admin\ReviewController::class, 'index'])->name('admin_review');
Route::get('show/{id}', [App\Http\Controllers\admin\ReviewController::class, 'show'])->name('admin_review_show');
Route::post('update/{id}', [App\Http\Controllers\admin\ReviewController::class, 'update'])->name('admin_review_update');
Route::get('destroy/{id}', [App\Http\Controllers\admin\ReviewController::class, 'destroy'])->name('admin_review_destroy');
    });

    //setting işlemleri

    Route::get('setting', [App\Http\Controllers\admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [App\Http\Controllers\admin\SettingController::class, 'update'])->name('admin_setting_update');


});


route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('myprofile');
    Route::get('/myreviews', [App\Http\Controllers\UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}', [App\Http\Controllers\UserController::class, 'destroymyreview'])->name('destroymyreview');

});

route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    Route::get('/profile', [App\Http\Controllers\UserController::class, 'index'])->name('userprofile');
    Route::get('treatments', [TreatmentController::class, 'index'])->name('user_treatment');

    Route::get('treatments/edit/{id}', [TreatmentController::class, 'edit'])->name('user_treatment_edit');
    Route::get('treatments/destroy/{id}', [TreatmentController::class, 'destroy'])->name('user_treatment_destroy');
    Route::get('treatments/show/{id}', [TreatmentController::class, 'show'])->name('user_treatment_show');
    Route::post('treatments/create', [TreatmentController::class, 'store'])->name('user_treatment_store');
    Route::post('treatments/update/{id}', [TreatmentController::class, 'update'])->name('user_treatment_update');
    Route::get('treatments/add', [TreatmentController::class, 'create'])->name('user_treatment_create');


    //images işlemleri
    Route::prefix('image')->group(function (){
        Route::get('delete/{id}/{treatment_id}', [App\Http\Controllers\admin\ImageController::class, 'destroy'])->name('user_image_delete');
        Route::get('show', [App\Http\Controllers\admin\ImageController::class, 'show'])->name('user_image_show');
        Route::post('store/{treatment_id}', [App\Http\Controllers\admin\ImageController::class, 'store'])->name('user_image_store');
        Route::get('create/{treatment_id}', [App\Http\Controllers\admin\ImageController::class, 'create'])->name('user_image_add');
    });
});

Route::get('/admin/login', [App\Http\Controllers\HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [App\Http\Controllers\HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('admin_logout');






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
