<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ChackoutController;
use App\Http\Controllers\CustomerAuthController;
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

//Route::get('/', function () {return view('welcome');});
Route::get('/',[EcommerceController::class,'index'])->name('home');
Route::get('/shop/{id}',[EcommerceController::class,'shop'])->name('shop');
Route::get('/product-details/{id}',[EcommerceController::class,'productDetails'])->name('product.details');


Route::post('/cart/add/{id}',[CartController::class,'index'])->name('cart.add');
Route::get('/cart/show',[CartController::class,'show'])->name('cart.show');
Route::get('/cart/remove/{id}',[CartController::class,'remove'])->name('cart.remove');
Route::post('/cart/update/{id}',[CartController::class,'update'])->name('cart.update');
Route::get('/checkout',[ChackoutController::class,'index'])->name('checkout');
Route::post('/order/new',[ChackoutController::class,'newOrder'])->name('order.new');
Route::get('/order/complite',[ChackoutController::class,'completeOrder'])->name('complete-order');


Route::get('/costomer/login',[CustomerAuthController::class,'CustomerLogin'])->name('customer.login');
Route::post('/costomer/login',[CustomerAuthController::class,'CustomerLogin'])->name('customer.login');
Route::post('/costomer/logout',[CustomerAuthController::class,'CustomerLogout'])->name('costomer.logout');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::get('/category',[CategoryController::class,'index'])->name('category');
    Route::post('/category',[CategoryController::class,'saveCategory'])->name('category');
    Route::post('/delete',[CategoryController::class,'categoryDelete'])->name('delete');
    Route::get('/status/{id}',[CategoryController::class,'status'])->name('status');
    Route::get('/edit-category/{id}',[CategoryController::class,'editCategory'])->name('edit.category');

    Route::get('/brand',[BrandController::class,'index'])->name('brand');
    Route::post('/new-brand',[BrandController::class,'saveBrand'])->name('new.brand');
    Route::get('/brand-status/{id}',[BrandController::class,'updateStatus'])->name('brand.status');
    Route::post('/brand-delete',[BrandController::class,'delete'])->name('brand.delete');
    Route::get('/edit.brand/{id}',[BrandController::class,'edit'])->name('edit.brand');
    Route::post('/update.brand',[BrandController::class,'update'])->name('update.brand');



    Route::get('/color',[ColorController::class,'index'])->name('color');
    Route::post('/add.color',[ColorController::class,'saveColor'])->name('add.color');
    Route::post('/color-delete',[ColorController::class,'deleteColor'])->name('color.delete');
    Route::get('/color-status/{id}',[ColorController::class,'updateStatus'])->name('color.status');
    Route::get('/edit-color/{id}',[ColorController::class,'edit'])->name('edit.color');
    Route::post('/update-color',[ColorController::class,'update'])->name('update.color');


    Route::get('/size',[SizeController::class,'index'])->name('size');
    Route::post('/add-size',[SizeController::class,'saveSize'])->name('add.size');
    Route::post('/size-delete',[SizeController::class,'deleteSize'])->name('size.delete');
    Route::get('/size-status/{id}',[SizeController::class,'updateStatus'])->name('size.status');
    Route::get('/edit-size/{id}',[SizeController::class,'edit'])->name('edit.size');
    Route::post('/update-size',[SizeController::class,'update'])->name('update.size');


    Route::get('/sub-category',[SubCategoryController::class,'index'])->name('sub.category');
    Route::post('/sub-category',[SubCategoryController::class,'saveSubCategory'])->name('sub.category');
    Route::get('/subStatus/{id}',[SubCategoryController::class,'subStatus'])->name('sub.Status');
    Route::post('/sub-delete',[SubCategoryController::class,'subCategoryDelete'])->name('sub.delete');
    Route::get('/edit-subcategory/{id}',[SubCategoryController::class,'edit'])->name('edit.subcategory');
    Route::post('/update-subcategory',[SubCategoryController::class,'update'])->name('update.subcategory');


    Route::get('/product/add',[ProductController::class,'index'])->name('product');
    Route::post('/product/create',[ProductController::class,'create'])->name('product.create');
    Route::get('/product/manage',[ProductController::class,'manage'])->name('product.manage');
    Route::get('/product/detail/{id}',[ProductController::class,'detail'])->name('product.detail');
    Route::get('/product/status',[ProductController::class,'updateStatus'])->name('product.status');
    Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
    Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::post('/product/update/{id}',[ProductController::class,'update'])->name('product.update');

});
