<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
  // return view('welcome');
//});

Auth::routes();


Route::controller(App\Http\Controllers\Frontend\FrontendController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/collections', 'categories');
    Route::get('/allcategories', 'categories');
    Route::get('/collections/{category_slug}', 'products');
    Route::get('/collections/{category_slug}/{product_slug}', 'productView');
    Route::get('/new-arrivals', 'newarrivals');
    Route::get('/featuredProducts', 'featuredproducts');
    Route::get('search', 'searchProducts');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function() {
    Route::get('/wishlists', [App\Http\Controllers\Frontend\WishlistController::class, 'index']);
    Route::get('/cart', [App\Http\Controllers\Frontend\CartController::class, 'index']);
    Route::get('/checkout', [App\Http\Controllers\Frontend\CheckoutController::class, 'index']);
    Route::get('/orders', [App\Http\Controllers\Frontend\OrderController::class, 'index']);
    Route::get('/order/{orderId}', [App\Http\Controllers\Frontend\OrderController::class, 'show']);

    Route::get('/profile', [App\Http\Controllers\Frontend\UserController::class, 'index']);
    Route::post('profile', [App\Http\Controllers\Frontend\UserController::class, 'updateUserDetails']);

    Route::get('/changepassword', [App\Http\Controllers\Frontend\UserController::class, 'passwordcreate']);
    Route::post('/change-password', [App\Http\Controllers\Frontend\UserController::class, 'updatepassword']);
});


    Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('settings', [App\Http\Controllers\Admin\SettingsController::class, 'index']);
    Route::post('settings', [App\Http\Controllers\Admin\SettingsController::class, 'store']);

//category route
Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
    Route::get('/category', 'index');
    Route::get('/category/create', 'create');
    Route::post('category', 'store');
    Route::get('/category/{category}/edit', 'edit');
    Route::put('/category/{category}', 'update');
});
Route::controller(App\Http\Controllers\Admin\BrandController::class)->group(function () {
    Route::get('/brand', 'index');
    Route::get('/brand/create', 'create');
    Route::post('brand', 'store');
});
Route::controller(App\Http\Controllers\Admin\ColorController::class)->group(function () {
    Route::get('/color', 'index');
    Route::get('/color/create', 'create');
    Route::post('color', 'store');
    Route::get('/color/{color}/edit', 'edit');
    Route::put('/color/{color}', 'update');
});

Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function () {
    Route::get('/products', 'index');
    Route::get('/products/create', 'create');
    Route::post('/products', 'store');
    Route::get('/products/{product}/edit', 'edit');
    Route::put('/products/{product}', 'update');
});

Route::controller(App\Http\Controllers\Admin\OrderController::class)->group(function () {
    Route::get('/orders', 'index');
    Route::get('/orders/{orderId}', 'show');
    Route::put('/orders/{orderId}', 'updateOrderStatus');
    Route::get('/invoice/{orderId}', 'viewInvoice');
    Route::get('/invoice/{orderId}/generate', 'generateInvoice');
    Route::get('/invoice/{orderId}/mail', 'mailinvoice');
});

Route::controller(App\Http\Controllers\Admin\UserController::class)->group(function () {
    Route::get('/users', 'index');
    Route::get('/users/create', 'create');
    Route::post('/users', 'store');
   Route::get('/users/{id}/edit', 'edit');
    Route::put('/users/{id}', 'update');
    Route::get('/users/{id}/delete', 'remove');
});




});

Route::prefix('retailers')->middleware(['auth','isRetailer'])->group(function(){

    Route::get('dashboard', [App\Http\Controllers\Retailers\DashboardController::class, 'index']);


    Route::controller(App\Http\Controllers\Retailers\ViewCategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::get('/{category_slug}', 'products');
        Route::get('/{category_slug}/{product_slug}', 'productView');
        Route::get('/new-arrivals', 'newarrivals');
        Route::get('/featuredProducts', 'featuredproducts');
        Route::get('search', 'searchProducts');
    });









});
