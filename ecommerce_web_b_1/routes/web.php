<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProductController;

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
    Route::get('/cat-status/{id}',[CategoryController::class,'catStatus'])->name('cat.status');
//    Route::post('/delete',[CategoryController::class,'categoryDelete'])->name('cat.delete');
    Route::post('/category-delete',[CategoryController::class,'categoryDelete'])->name('cat.delete');
    Route::get('/category-edit/{id}',[CategoryController::class,'categoryEdit'])->name('category.edit');
    Route::post('/update-category',[CategoryController::class,'updateCategory'])->name('update.category');

    Route::get('/sub-category',[SubcategoryController::class,'index'])->name('sub.category');
    Route::post('/sub-category',[SubcategoryController::class,'saveSubCategory'])->name('sub.category');
    Route::get('/sub-status/{id}',[SubcategoryController::class,'saveSubStatus'])->name('sub-status');
    Route::post('/sub-delete',[SubcategoryController::class,'SubDelete'])->name('sub-delete');
    Route::get('/sub-edit,{id}',[SubcategoryController::class,'subEdit'])->name('sub-edit');
    Route::post('/update-subcategory',[SubcategoryController::class,'updateSubCategory'])->name('update.subcategory');


    Route::get('/barand',[BrandController::class,'index'])->name('barand');
    Route::post('/brand',[BrandController::class,'Savebrand'])->name('brand');
    Route::get('/status-brand/{id}',[BrandController::class,'brandStatus'])->name('brand.status');
    Route::post('delete-brand',[BrandController::class,'deleteBrand'])->name('brand.delete');
    Route::get('/edit-brand/{id}',[BrandController::class,'editBrand'])->name('edit.brand');
    Route::post('/update-brand',[BrandController::class,'updateBrand'])->name('update.brand');


    Route::get('/color',[ColorController::class,'index'])->name('color');
    Route::post('/color-save',[ColorController::class,'saveColor'])->name('save.color');


    Route::get('/size',[SizeController::class,'index'])->name('size');
    Route::post('/size-save',[SizeController::class,'saveSize'])->name('save.size');
    Route::get('/status/{id}',[SizeController::class,'status'])->name('status');
    Route::post('/delete',[SizeController::class,'sizeDelete'])->name('delete');
    Route::get('/edit/{id}',[SizeController::class,'editSize'])->name('size.edit');
    Route::post('/update-Size',[SizeController::class,'updateSize'])->name('update.size');

    Route::get('/product/add',[ProductController::class,'index'])->name('product.add');
//    Route::post('/product/create',[ProductController::class,'create'])->name('product.create');
    Route::post('/create/product',[ProductController::class,'createProduct'])->name('product.create');
    Route::get('/product/manage',[ProductController::class,'manage'])->name('product.manage');
    Route::get('/product/edit/{id}',[ProductController::class,'editProduct'])->name('product.edit');
    Route::post('/product/update',[ProductController::class,'updateProduct'])->name('product.update');
    Route::post('delete-product',[ProductController::class,'productDelete'])->name('product.delete');
    Route::get('/status-brand/{id}',[ProductController::class,'manage'])->name('product.status');



});
