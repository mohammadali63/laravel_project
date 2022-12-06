<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardConteroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

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


Route::get('/', function () {return view('welcome');
});

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('blog-details',[HomeController::class,'BlogDetails'])->name('blog.details');

Route::get('categories',[HomeController::class,'categories'])->name('category');

Route::get('about',[HomeController::class,'about'])->name('about');

Route::get('contact',[HomeController::class,'contact'])->name('contact');






Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard',[DashboardConteroller::class,'index'])->name('dashboard');
    Route::get('/category',[CategoryController::class,'index'])->name('category');
    Route::post('/category-create',[CategoryController::class,'save'])->name('category.create');

});


