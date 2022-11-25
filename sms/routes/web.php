<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;
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

Route::get('/',[SmsController::class,'index'])->name('home');
Route::get('/manage',[SmsController::class,'manage'])->name('manage');

Route::get('/dept-add',[DepartmentController::class,'deptAdd'])->name('dept.add');
Route::get('/dept-manage',[DepartmentController::class,'deptManage'])->name('dept.manage');
