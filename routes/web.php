<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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