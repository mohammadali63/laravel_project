<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\BrandController;

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
    Route::get('/status/{id}',[CategoryController::class,'status'])->name('status');
    Route::post('/delete',[CategoryController::class,'categoryDelete'])->name('delete');
    Route::get('/edit/{id}',[CategoryController::class,'editCategory'])->name('edit');
    Route::post('/update-category',[CategoryController::class,'updateCategory'])->name('update.category');

    Route::get('/sub-category',[SubcategoryController::class,'index'])->name('sub.category');
    Route::post('/sub-category',[SubcategoryController::class,'saveSubCategory'])->name('sub.category');
    Route::get('/sub-status/{id}',[SubcategoryController::class,'saveSubStatus'])->name('sub-status');
    Route::post('/sub-delete',[SubcategoryController::class,'SubDelete'])->name('sub-delete');
    Route::get('/sub-edit,{id}',[SubcategoryController::class,'subEdit'])->name('sub-edit');
    Route::post('/update-subcategory',[SubcategoryController::class,'updateSubCategory'])->name('update.subcategory');


    Route::get('/barand',[BrandController::class,'index'])->name('barand');
    Route::post('/brand',[BrandController::class,'Savebrand'])->name('brand');
    Route::get('/status/{id}',[BrandController::class,'status'])->name('status');
    Route::post('/delete',[BrandController::class,'brandDelete'])->name('delete');
    Route::get('/edit/{id}',[BrandController::class,'editBrand'])->name('edit');
    Route::post('/update-brand',[BrandController::class,'updateBrand'])->name('update.brand');
});
