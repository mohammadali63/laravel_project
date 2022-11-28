<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Sections;
use App\Http\Controllers\DepartmentController;


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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[StudentController::class,'index'])->name('home');
Route::post('/save-info',[StudentController::class,'save'])->name('save.info');
Route::get('/manage',[StudentController::class,'manage'])->name('manage.info');
Route::post('/delete',[StudentController::class,'delete'])->name('delete');

Route::get('/section',[Sections::class,'section'])->name('section');
Route::post('/save-section',[Sections::class,'saveSection'])->name('save.section');

Route::get('/department',[DepartmentController::class,'department'])->name('department');
Route::post('save-department',[DepartmentController::class,'Savedept'])->name('save.dept');

