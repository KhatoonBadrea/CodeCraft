<?php

use PHPUnit\Event\Code\Test;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use PHPUnit\TextUI\Output\Default\ProgressPrinter\TestRunnerExecutionStartedSubscriber;

Route::get('/', function () {
    return view('welcome');
});

// ============================product route

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create')->middleware('check');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/edit.products/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/update.products/{id}', [ProductController::class, 'update'])->name('products.update');

Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');


// ======================= authontication route
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ===================== category route

Route::resource('categories', CategoryController::class)->middleware('check');

//=====================Course Route

Route::resource('courses', CourseController::class);
