<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\UserCommentController;
use App\Http\Controllers\InformController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\UserMessageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FollowController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/main', function () {
//     return view('main/main');
// })->name('main');php artisan route:clear

// Route::get('/coupons', function () {
//     return view('main/coupons');
// })->name('coupons');

// Main
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/news1', [HomeController::class, 'news1'])->name('news1');
Route::get('/news2', [HomeController::class, 'news2'])->name('news2');
Route::get('/news3', [HomeController::class, 'news3'])->name('news3');

Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
Route::get('/book-{id}', [CatalogController::class, 'show']);

Route::post('/userComment', [UserCommentController::class, 'index'])->name('userComment');

Route::get('/inform', [InformController::class, 'index'])->name('inform');

Route::get('/account', [AccountController::class, 'index'])->name('account');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');

Route::post('/userMessage', [userMessageController::class, 'index'])->name('userMessage');

Route::post('/follow', [FollowController::class, 'index'])->name('follow');


// Coupon
// Route::get('/coupons', [CouponsController::class, 'index'])->name('coupons.index');
// Route::post('/coupons/create', [CouponsController::class, 'create'])->name('coupons.create');
// Route::post('/coupons/delete', [CouponsController::class, 'delete'])->name('coupons.delete');
// Route::post('/coupons/deleteAll', [CouponsController::class, 'deleteAll'])->name('coupons.deleteAll');
// Route::get('/coupons/{coupon}', [CouponsController::class, 'show'])->name('coupons.show');

// Promo
// Route::get('/promo', [MainController::class, 'promo'])->name('main.promo');

// Map
// Route::get('/map', [MainController::class, 'map'])->name('main.map');

// User
// Route::get('/user/profile', [UserController::class, 'index'])->name('user.index');

// Cart
// Route::get('/cart', [CartController::class, 'show'])->name('cart.show');
// Route::post('/cart/create', [CartController::class, 'create'])->name('cart.create');
// Route::post('/cart/delete', [CartController::class, 'delete'])->name('cart.delete');
// Route::post('/cart/deleteAll', [CartController::class, 'deleteAll'])->name('cart.deleteAll');

// Orders
// Route::post('/orders/create', [OrdersController::class, 'create'])->name('order.create');

// Worker panel
// Route::get('/workerpanel', [WorkerController::class, 'index'])->name('workerpanel.index');
// Route::patch('/workerpanel/{order}', [WorkerController::class, 'update'])->name('workerpanel.update');

// Admin panel
// Route::middleware(['auth', 'admin'])->group(function () {
    // Route::get('/adminpanel', [TovarsController::class, 'index'])->name('adminpanel.index');
	// Route::get('/adminpanel/create', [TovarsController::class, 'create'])->name('adminpanel.create');
	// Route::post('/adminpanel', [TovarsController::class, 'store'])->name('adminpanel.store');
	// Route::get('/adminpanel/{tovar}/edit', [TovarsController::class, 'edit'])->name('adminpanel.edit');
	// Route::patch('/adminpanel/{tovar}', [TovarsController::class, 'update'])->name('adminpanel.update');
	// Route::delete('/adminpanel/{tovar}', [TovarsController::class, 'destroy'])->name('adminpanel.destroy');
// });

// Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Main
// Route::get('/{tovar}', [MainController::class, 'show'])->name('main.show');
