<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sections;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StudentContrller;


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

Route::get('/',[StudentContrller::class,'index'])->name('home');
Route::post('/save-info',[StudentContrller::class,'save'])->name('save.info');
Route::get('/manage',[StudentContrller::class,'manage'])->name('manage.infos');
Route::post('/delete',[StudentContrller::class,'delete'])->name('delete');
Route::get('/edit/{id}',[StudentContrller::class,'edit'])->name('edit');

Route::get('/section',[Sections::class,'section'])->name('section');
Route::post('/save-section',[Sections::class,'saveSection'])->name('save.section');

Route::get('/department',[DepartmentController::class,'department'])->name('department');
Route::post('save-department',[DepartmentController::class,'Savedept'])->name('save.dept');
Route::get('/managedept',[DepartmentController::class,'managedept'])->name('manage.dept');
Route::post('/delete-dept',[DepartmentController::class,'deleteDept'])->name('delete.dept');


Route::post('/updaet-student',[StudentContrller::class,'updateStudent'])->name('student.update');
