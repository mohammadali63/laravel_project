<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardConteroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
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
    Route::get('/edit-category/{id}',[CategoryController::class,'editCategory'])->name('edit.category');
    Route::post('/update-category',[CategoryController::class,'updateCategory'])->name('update.category');
    Route::post('/delete-category',[CategoryController::class,'deleteCategory'])->name('delete.category');

    Route::get('/author',[AuthorController::class,'author'])->name('author');
    Route::post('/author-save',[AuthorController::class,'authorSave'])->name('author.save');
    Route::get('/edit-author/{id}',[AuthorController::class,'editAuthor'])->name('edit.author');
    Route::post('/update-author',[AuthorController::class,'updateAuthor'])->name('update.author');
    Route::post('/delete-author',[AuthorController::class,'deleteAuthor'])->name('delete.author');

    Route::get('/blog',[BlogController::class,'index'])->name('blog');
    Route::post('/new-blog',[BlogController::class,'saveBlog'])->name('new.blog');
    Route::get('manage-blog',[BlogController::class,'manageBlog'])->name('manage.blog');

});


