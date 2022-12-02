<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;

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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/add-blog',[BlogController::class,'addBlog'])->name('add.blog');
Route::get('/manage-blog',[BlogController::class,'manage'])->name('manage.blog');
Route::post('/new-blog',[BlogController::class,'save'])->name('new.blog');
Route::get('/status/{id}',[BlogController::class,'status'])->name('status');
Route::get('/edit/{id}',[BlogController::class,'edit'])->name('edit');
Route::post('/update-data',[BlogController::class,'updateBlog'])->name('update.data');

Route::post('/delete',[BlogController::class,'delete'])->name('delete');
