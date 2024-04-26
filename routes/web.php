<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommandeController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['role:admin'])->name('dashboard')->get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::group(['middleware' => ['role:admin']], function () {
        Route::resource('/products', ProductController::class);
        Route::get('/products/{product}', [ProductController::class, 'destroy']);
        Route::resource('/categories', CategoryController::class);
        Route::get('/categories/{category}', [CategoryController::class, 'destroy']);
        Route::get('/order/checkout', [CommandeController::class, 'show'])->name('contact.voir');
        Route::get('/orders/list', [CommandeController::class, 'index'])->name('orders.list');
        Route::get('/orders/{commande}/edit', [CommandeController::class, 'edit'])->name('orders.edit');
        Route::put('/orderS/{commande}/update', [CommandeController::class, 'update'])->name('orders.update');
        Route::get('/orderS/{commande}', [CommandeController::class, 'destroy'])->name('orders.destroy');
    });
});




require __DIR__ . '/auth.php';
