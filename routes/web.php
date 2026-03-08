<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Models\Course;
use App\Http\Controllers\HomeController;
use App\Http\Models\Booking;
use App\Models\Category;





Route::get('/',[AdminController::class,'home'])->name('home');

Route::get('/course_page',[AdminController::class,'course_page']);

Route::post('/add-course', [AdminController::class, 'add_course'])->name('add_course');

Route::get('/view_course',[AdminController::class,'view_course']);



Route::get('/course_delete/{id}',[AdminController::class,'course_delete'] );

Route::get('/course_update/{id}',[AdminController::class,'course_update'] );

Route::post('/edit_course/{id}',[AdminController::class,'edit_course'])->name('edit_course');

Route::get('/enroll/{id}',[HomeController::class,'enroll'] );


Route::post('/submit_enroll/{id}', [HomeController::class, 'submit_enroll']);
Route::get('/enrollment', [AdminController::class, 'enrollment']);
Route::get('/delete_enrollment/{id}',[AdminController::class,'delete_enrollment']);

Route::get('/approve_enrollment/{id}',[AdminController::class,'approve_enrollment']);

Route::get('/reject_enrollment/{id}',[AdminController::class,'reject_enrollment']);
Route::get('/view_category',[AdminController::class,'view_category']);
Route::post('/upload_category',[AdminController::class,'upload_category']);
Route::get('/delete_category/{id}', [AdminController::class, 'delete_category'])->name('delete_category');
Route::post('/contact',[HomeController::class,'contact']);
Route::get('/all_messages',[AdminController::class,'all_messages']);
Route::get('/delete_email/{id}', [AdminController::class, 'delete_email'])->name('delete_email');
Route::get('/send_email/{id}',[AdminController::class,'send_email']);
Route::post('/instructordata', [AdminController::class, 'instructerdata'])->name('instructordata');
Route::get('/instructer_appointment',[AdminController::class,'instructer_appointment']);
Route::get('/send_emailtoinstructer/{id}', [AdminController::class, 'send_emailtoinstructer'])->name('send_emailtoinstructer');

Route::get('/approve_instructer/{id}', [AdminController::class, 'approve_instructer']);
Route::get('/reject_instructer/{id}', [AdminController::class, 'reject_instructer']);

Route::get('/delete_emailofinstructer/{id}', [AdminController::class, 'delete_emailofinstructer'])->name('delete_emailofinstructer');

Route::post('/mail/{id}',[AdminController::class,'mail']);

Route::get('/enroll_status', [AdminController::class, 'enroll_status'])->name('enroll_status');
Route::get('/instructer_status', [AdminController::class, 'instructer_status'])->name('instructer_status');


















Route::get('/about',[HomeController::class,'about'] )->name('about page');
Route::get('/course_link',[HomeController::class,'course_link'] )->name('course page');
Route::get('/contact_link',[HomeController::class,'contact_link'] )->name('contact page');
Route::get('/test_link',[HomeController::class,'test_link'] )->name('test page');
Route::get('/team_link',[HomeController::class,'team_link'] )->name('team page');
Route::get('/instructer',[HomeController::class,'instructer'] )->name('instructer');









Route::get('/dashboard',[UserController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
