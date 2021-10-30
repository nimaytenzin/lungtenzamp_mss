<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\StudentClassroomController;





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
    return view('public.pages.index');
});



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function () {
    return view('admin.pages.index');
});
Route::get('/staffs',[StudentController::class,'who']);

Route::group(['as' => 'admin.','prefix'=>'admin'], function(){
    Route::get('/',[StudentController::class,'adminHome']);
    Route::get('/home',[StudentController::class,'adminHome']);
    Route::resource('/students',StudentController::class);
    Route::resource('/staffs',StaffController::class);
    Route::resource('/grades',GradeController::class);
    Route::resource('/subjects',SubjectController::class);
    Route::resource('/classrooms',ClassroomController::class);
    Route::resource('/student-classroom',StudentClassroomController::class);

});