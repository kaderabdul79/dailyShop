<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');

// category Module
Route::get('/category/add-category', [CategoryController::class,'addCategory'])->name('add-category');
Route::post('/category/new-category', [CategoryController::class,'newCategory'])->name('new-category');

Route::get('/category/manage-category', [CategoryController::class,'manageCategory'])->name('manage-category');

Route::get('/category/edit-category/{id}', [CategoryController::class,'editCategory'])->name('edit-category');
Route::post('/category/update-category', [CategoryController::class,'updateCategory'])->name('update-category');
Route::get('/category/delete-category/{id}', [CategoryController::class,'deleteCategory'])->name('delete-category');


// 
// Route::get('/get-category-name/{category_name}', [ProductController::class,'getCategoryName'])->name('get-category-name-by-id');


// brand

Route::get('/brand/add-brand', [BrandController::class,'addBrand'])->name('add-brand');
// Route::post('/brand/new-brand', [BrandController::class,'newBrand'])->name('new-brand');
// Route::get('/brand/edit-brand/{id}', [BrandController::class,'editBrand'])->name('edit-brand');
// Route::post('/brand/update-brand', [BrandController::class,'updateBrand'])->name('update-brand');
// Route::get('/brand/delete-brand/{id}', [BrandController::class,'deleteBrand'])->name('delete-brand');
// Route::get('/brand/manage-brand', [BrandController::class,'manageBrand'])->name('manage-brand');