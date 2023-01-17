<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashBordController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard',[DashBordController::class,'dashboard'])->name('dashboard');
    Route::get('/useradd',[UserController::class,'index'])->name('useradd');
    Route::post('/new/user',[UserController::class,'NewUser'])->name('new.user');
    Route::get('/user/manage',[UserController::class,'manage'])->name('user.manage');
    Route::get('/user/edit/{id}',[UserController::class,'userEdit'])->name('user.edit');
    Route::post('/user/update',[UserController::class,'userUpdate'])->name('update.user');
    Route::post('/user/delete',[UserController::class,'Delete'])->name('user.delete');
});
