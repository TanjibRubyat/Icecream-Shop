<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Backend\AdminProductsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/products',[ProductsController::class, 'index'])->name('products.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//admin


Route::group(['prefix' => 'admin'], function () {

    Route::get('/', function () {
        return view('backend.pages.admin-index');
    });

    Route::get('/products-create',[AdminProductsController::class,'create'])->name('admin.products.create');
    Route::post('/products-create',[AdminProductsController::class,'store'])->name('admin.products.store');

    Route::get('/products-manage', [AdminProductsController::class,'manage'])->name('admin.products.manage');

    Route::get('/orders',[OrderController::class,'orders'])->name('admin.products.order');

    Route::get('/products-edit/{id}', [AdminProductsController::class,'edit'])->name('admin.products.edit');
    Route::post('/products-edit/{id}', [AdminProductsController::class,'update'])->name('admin.products.update');

    Route::get('/products-delete/{id}',[AdminProductsController::class, 'delete'])->name('admin.products.delete');
});


//carts


//Route::get('/cart-store',[CartController::class,'product_id'])->name('cart.product_id');
Route::post('/cart-store',[CartController::class,'store'])->name('cart.store');
Route::get('/cart-view', [CartController::class,'show'])->name('cart.show');
Route::post('/cart-quantity/{id}', [CartController::class,'cart_quantity'])->name('cart.quantity');
Route::get('/cart-delete/{id}', [CartController::class,'destroy_item'])->name('cart.destroy');


//checkouts

Route::get('/checkouts', [CartController::class,'checkouts_show'])->name('checkouts.index');
Route::post('/checkouts', [AddressController::class,'store'])->name('checkouts.store');

//payments methods

Route::get('/payment-method',[PaymentMethodController::class,'index'])->name('payment.index');
Route::post('/payment-method',[PaymentMethodController::class,'store'])->name('payment.store');

//user payment store
//Route::get('/user-payment',[PaymentController::class,'index'])->name('userpayment.index');
//Route::post('/user-payment',[PaymentController::class,'store'])->name('userpayment.store');


//confirmation
Route::get('/confirm',[OrderController::class,'index'])->name('confirm.index');
Route::post('/confirm', [OrderController::class,'storeOrders'])->name('confirm.orders');

//user-profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/stripe-payment', [StripeController::class, 'handleGet']);
Route::post('/stripe-payment', [StripeController::class, 'handlePost'])->name('stripe.payment');