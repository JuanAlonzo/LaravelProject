<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'index'])->name('principal.index');

Route::get('/products/{category}', [PrincipalController::class, 'productByCategory'])->name('products.category');

Route::get('/product/{product}', [PrincipalController::class, 'product'])->name('product');

Route::get('about-us', [ContactUsController::class, 'index'])->name('contact.index');
Route::post('about-us', [ContactUsController::class, 'store'])->name('contact.store');


Route::resource('dashboard', HomeController::class)
    ->only(['index'])->middleware(['auth']);

Route::resource('categories', CategoryController::class)
    ->only(['index', 'show', 'store', 'edit', 'update', 'destroy'])->middleware(['auth']);

Route::resource('products', ProductController::class)
    ->only(['index', 'show', 'store', 'edit', 'update', 'destroy'])->middleware(['auth']);

// Add Clients Route
Route::get('clients', function () {
    return view('clients.index');
})->middleware(['auth'])->name('clients');

Route::resource('forms', FormController::class)
    ->only(['index'])->middleware(['auth']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
