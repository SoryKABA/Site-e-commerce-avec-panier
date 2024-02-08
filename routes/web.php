<?php

use App\Http\Controllers\Admin\OrderController as ControllersOrderController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\PictureController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Shop\ProductsController as ShopProductsController;
use Gloudemans\Shoppingcart\Facades\Cart;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/products', [ProductController::class, 'index'])->name('products.home');
Route::get('/products/show/{slug}-{product}', [ProductController::class, 'show'])
    ->where([
        'slug' => '[a-z0-9\-]+',
        'product' => '[0-9]+'
    ])
    ->name('products.show');
Route::get('/shop/products', [ShopProductsController::class, 'index'])->name('shop.home');
Route::get('/shop/show/{slug}-{product}', [ShopProductsController::class, 'show'])
    ->where([
        'slug' => '[a-z0-9\-]+',
        'product' => '[0-9]+'
    ])
    ->name('shop.show');
Route::post('/products', [ProductController::class, 'store'])->name('customer.register');
Route::get('/images/{path}', [ImageController::class, 'show'])->where('path', '.*');

Route::post('/cart/add', [CartController::class, 'store'])->name('add.cart');
Route::get('/shop/cart', [CartController::class, 'index'])->name('my-cart');
Route::delete('/shop/cart/{rowId}', [CartController::class, 'destroy'])->name('cart.product.destroy');
Route::get('cart/destroy', function () {
    Cart::destroy();
    return redirect()->route('shop.home')->with('success', 'Votre panier a été vidé avec succès');
})->name('cart.destroy');
Route::get('/shop/payment', [CartController::class, 'payment'])->name('shop.payment');
Route::post('/shop/cinetpay', [CartController::class, 'cartPayment'])->name('cart.payment');

Route::middleware('auth')->get('order/{id}', [ControllersOrderController::class, 'index'])
    ->where(['payment_id' => '[0-9]+'])
    ->name('order.product');
Route::middleware('auth')->get('/order/orders', [ControllersOrderController::class, 'orders'])->name('order.orders');

Route::get('/auth/login',  [AuthController::class, 'login'])->name('auth.login');
Route::post('/auth/login',  [AuthController::class, 'dologin']);
Route::delete('/logout',  [AuthController::class, 'logout'])->name('auth.logout');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('product', ProductsController::class)->except('show');
    Route::resource('category', CategoryController::class);
    Route::resource('user', UsersController::class);
    Route::delete('picture/{picture}', [PictureController::class, 'destroy'])
        ->name('product.delete')
        ->where(['picture' => '[0-9]+']);
});

require __DIR__.'/auth.php';
