<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\DashboardController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[EcommerceController::class,'index'])->name('home');
Route::get('/shop',[EcommerceController::class,'shop'])->name('shop');
Route::get('/single-product',[EcommerceController::class,'productDetails'])->name('single.product');
Route::get('/cart',[EcommerceController::class,'cart'])->name('cart');
Route::get('/checkout',[EcommerceController::class,'checkout'])->name('checkout');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

//    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/category',[CategoryController::class,'index'])->name('category');
    Route::post('/category',[CategoryController::class,'SaveCategory'])->name('category');
});
