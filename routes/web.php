<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductCategoryController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('layouts.main');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::resource('products', ProductController::class);
Route::resource('orders',OrderController::class);
Route::resource('category',ProductCategoryController::class);

//ajax
Route::prefix('ajax')->group(function () {
    Route::get('get/product',[ProductController::class,'getData'])->name('get.product');
    Route::get('get/category',[ProductCategoryController::class,'getData'])->name('get.category');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
