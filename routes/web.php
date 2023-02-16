<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CoachingController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ImmersiveCourseController;
use App\Http\Controllers\JobCounselingController;
use App\Http\Controllers\OSPController;
use App\Http\Controllers\TransitionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']);

// static pages
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('coaching', [CoachingController::class, 'index'])->name('coaching');
Route::get('formation', [FormationController::class, 'index'])->name('formation');
Route::get('immersiveCourse', [ImmersiveCourseController::class, 'index'])->name('immersiveCourse');
Route::get('jobCounseling', [JobCounselingController::class, 'index'])->name('jobCounseling');
Route::get('transition', [TransitionController::class, 'index'])->name('transition');
Route::get('osp', [OSPController::class, 'index'])->name('osp');

// login
Route::get('login', [UserController::class, 'login'])->name('users.login');
Route::post('loginInput', [UserController::class, 'loginInput'])->name('users.loginInput');
Route::get('logout', [UserController::class, 'logout'])->name('users.logout');

// register
Route::get('register', [UserController::class, 'register'])->name('users.register');
Route::post('registerInput', [UserController::class, 'registerInput'])->name('users.registerInput');

// change password
Route::get('changepassword', [UserController::class, 'changePassword'])->name('users.changepassword');
Route::post('changepassword', [UserController::class, 'updatePassword'])->name('users.updatepassword');

// client
Route::resource('clients', ClientController::class);

// CMS
Route::resource('editors', EditorController::class);

// contact form
Route::get('contact', [ContactUsFormController::class, 'createForm'])->name('contact');
Route::post('contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

// image
Route::controller(ImageController::class)->group(function(){
    Route::get('/image-upload', 'index')->name('image.form');
    Route::post('/upload-image', 'storeImage')->name('image.store');
});

Route::delete('removeImage', [ImageController::class, 'removeImage'])->name('removeImage');
