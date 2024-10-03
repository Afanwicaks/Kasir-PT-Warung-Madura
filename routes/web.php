<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TransactionController;

// Halaman utama (Dashboard)
Route::get('/', [ProductController::class, 'index'])->name('dashboard');

// Autentikasi (dari Laravel Breeze)
require __DIR__.'/auth.php';

//Routes Login
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/home', [AuthController::class, 'showHome'])->name('home');

//Routes Home
Route::get('/home', function () {
    return view('home');
})->name('home');

// Routes Kategori

Route::get('/category/create', function () {
    return view('categories.create');
})->name('categories.create');

Route::get('/category/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('categories.store');

// Routes Produk
Route::resource('products', ProductController::class);

// Routes Add Producct
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

// Routes Keranjang
Route::get('/cart', function () {
    return view('index');
})->name('cart.index');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('cart/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/pay', [CartController::class, 'pay'])->name('cart.pay');

// Routes Transaksi
Route::get('transactions', [TransactionController::class, 'index'])->name('transactions.index');
Route::post('transactions', [TransactionController::class, 'store'])->name('transactions.store');

// Routes Filter Produk (AJAX)
Route::get('filter-products', [ProductController::class, 'filter'])->name('products.filter');

//Routes Payment Succeess  
Route::get('/payment-success', function () {
    $totalAmount = 60000; 
    return view('payment.success', ['total' => $totalAmount]);
})->name('payment.success');

Route::get('/payment-success', [PaymentController::class, 'paymentSuccess'])->name('payment.success');
