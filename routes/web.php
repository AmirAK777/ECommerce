<?php

use App\Models\User;
use Spatie\Permission\Models\Role;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ShopController;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommandeController;

Route::get('/', function () {

    // $createAdmin = Role::create(['name' => 'admin']);
    // $createUser = Role::create(['name' => 'user']);
    // $permHelloworld = Permission::create(['name' => 'admin']);
    // $permGoodBye = Permission::create(['name' => 'user']);

    // $roleAdmin = Role::find(1);
    // $user = User::find(1); 
    // $user->assignRole('admin');

    return view('welcome');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');


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
        Route::get('/order/checkout', [CommandeController::class, 'show'])->name('contact.show');
        Route::get('/orders/list', [CommandeController::class, 'index'])->name('orders.list');
        Route::get('/orders/{commande}/edit', [CommandeController::class, 'edit'])->name('orders.edit');
        Route::put('/orderS/{commande}/update', [CommandeController::class, 'update'])->name('orders.update');
        Route::get('/orderS/{commande}', [CommandeController::class, 'destroy'])->name('orders.destroy');
    });
});


Route::get('/contact')->name('contact.voir');
Route::get('/csontact')->name('blogs.show');

Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/{category}', [ShopController::class, 'show'])->name('shop.show');
Route::get('/item/{product}', [ShopController::class, 'showItem'])->name('shop.item');
Route::get('add-to-cart/{id}', [ShopController::class, 'addToCart'])->name('add_to_cart');
Route::get('/cart', [ShopController::class, 'showCart'])->name('cart.index');
Route::get('/cart/remove/{id}', [ShopController::class, 'remove'])->name('cart.remove');

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/ma-vue', function () {
    return view('layouts.shop');
});
require __DIR__ . '/auth.php';
