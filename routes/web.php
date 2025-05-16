<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');


Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/edit.products/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/update.products/{id}', [ProductController::class, 'update'])->name('products.update');

Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
