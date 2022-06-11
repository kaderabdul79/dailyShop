<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\SliderController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Frontend\FrontendHomeController;



Auth::routes();

// start dashboard / backend Here

// to enter dashboard
Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');

// category Module
Route::prefix('category')->group(function () {
    Route::get('/add-category', [CategoryController::class,'addCategory'])->name('add-category');
    Route::post('/new-category', [CategoryController::class,'newCategory'])->name('new-category');
    Route::get('/manage-category', [CategoryController::class,'manageCategory'])->name('manage-category');
    Route::get('/edit-category/{id}', [CategoryController::class,'editCategory'])->name('edit-category');
    Route::post('/update-category', [CategoryController::class,'updateCategory'])->name('update-category');
    Route::get('/delete-category/{id}', [CategoryController::class,'deleteCategory'])->name('delete-category');
});

// brand module
Route::prefix('brand')->group(function () {
    Route::get('/add-brand', [BrandController::class,'addBrand'])->name('add-brand');
    Route::post('/new-brand', [BrandController::class,'newBrand'])->name('new-brand');
    Route::get('/edit-brand/{id}', [BrandController::class,'editBrand'])->name('edit-brand');
    Route::post('/update-brand', [BrandController::class,'updateBrand'])->name('update-brand');
    Route::get('/delete-brand/{id}', [BrandController::class,'deleteBrand'])->name('delete-brand');
    Route::get('/manage-brand', [BrandController::class,'manageBrand'])->name('manage-brand');
});

// product module
Route::prefix('product')->group(function () {
    Route::get('/add-product', [ProductController::class,'addProduct'])->name('add-product');
    Route::post('/new-product', [ProductController::class,'newProduct'])->name('new-product');
    Route::get('/manage-product', [ProductController::class,'manageProduct'])->name('manage-product');
    Route::get('/view-product/{id}', [ProductController::class,'viewProduct'])->name('view-product');
    Route::get('/edit-product/{id}', [ProductController::class,'editProduct'])->name('edit-product');
    Route::post('/update-product', [ProductController::class,'updateProduct'])->name('update-product');
    Route::get('/delete-product/{id}', [ProductController::class,'deleteProduct'])->name('delete-product'); 
});


// Slider module
Route::prefix('slider')->group(function () {
    Route::get('/add-slider', [SliderController::class,'create'])->name('add-slider');
    Route::post('/new-product', [SliderController::class,'store'])->name('new-slider');
    Route::get('/manage-slider', [SliderController::class,'index'])->name('manage-slider');
    Route::get('/view-slider/{id}', [SliderController::class,'viewSlider'])->name('view-slider');
    Route::get('/edit-slider/{id}', [SliderController::class,'editSlider'])->name('edit-slider');
    Route::post('/update-slider', [SliderController::class,'updateSlider'])->name('update-slider');
    Route::get('/delete-slider/{id}', [SliderController::class,'deleteSlider'])->name('delete-slider');
});

// end dashboard / backend Here



// start for fronted
Route::get('/', [FrontendHomeController::class,'showHomePage'])->name('home-page');

// product
Route::prefix('product')->group(function () {
    Route::get('/', [FrontendHomeController::class,'showProductPage'])->name('product-page');
    Route::get('/product-details/{id}', [FrontendHomeController::class,'showProductDetails'])->name('product-details');
});

// Cart
Route::prefix('cart')->group(function () {
    Route::get('/show-cart', [CartController::class, 'showCart'])->name('cart.show-cart');
    Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add-to-cart');
    Route::post('/update-cart-product/{rowId}', [CartController::class, 'updateToCart'])->name('update-cart-product');
    Route::get('/remove-to-cart/{rowId}', [CartController::class, 'removeToCart'])->name('remove-to-cart');
});

