<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\CustomerController as AdminCustomerController;

// Rotas principais
Route::get('/', [ProductController::class, 'index'])->name('home');
Route::resource('products', ProductController::class)->only(['index', 'show']);
Route::get('products/search', [ProductController::class, 'search'])->name('products.search');
Route::resource('cart', CartItemController::class)->except(['create', 'show', 'edit']);
Route::get('profile', [CustomerController::class, 'edit'])->name('customers.edit');
Route::put('profile', [CustomerController::class, 'update'])->name('customers.update');
Route::resource('orders', OrderController::class)->only(['index', 'show']);
Route::post('orders', [OrderController::class, 'store'])->name('orders.store');

// Rotas de autenticação
Route::get('login', [CustomerController::class, 'showLoginForm'])->name('login');
Route::post('login', [CustomerController::class, 'login']);
Route::get('register', [CustomerController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [CustomerController::class, 'register']);
Route::post('logout', [CustomerController::class, 'logout'])->name('logout');

// Rotas para a busca de produtos
Route::get('search', [ProductController::class, 'search'])->name('products.search');

// Rotas de autenticação padrão do Laravel
Auth::routes();

// Rota para a home após o login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rotas administrativas com middleware de autenticação e admin
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', AdminProductController::class);
    Route::resource('customers', AdminCustomerController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
