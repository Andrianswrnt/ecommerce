<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\IsAdmin; // Corrected namespace for IsAdmin middleware
use App\Models\Cart;
use App\Models\kategori;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $barang = \App\Models\Barang::all(); // Corrected model namespace
    $kategori = kategori::all();
    return view('welcome', compact('barang','kategori'));
})->name('welcome')->middleware('auth');


Route::group(['prefix' => 'dashboard'], function(){
    Route::resource('user', UserController::class);
    Route::resource('barang', BarangController::class);
    Route::resource('kategori', KategoriController::class);
});

Route::get('/admin', function () {
    return view('home');
})->middleware('auth');



Route::get('/produk', function () {
    $barang = \App\Models\Barang::all(); // Corrected model namespace
    $kategori = kategori::all();
    return view('produk', compact('barang', 'kategori' ));
})->name('barangs');

Route::middleware(['auth'])->group(function () {
    
    Route::get('/checkout', [CheckoutController::class, 'show'])->name('checkout.show');
    Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');
    Route::get('/checkout/invoice', [CheckoutController::class, 'showInvoice'])->name('checkout.invoice');
});



    


Route::get('barang/{barang}', [BarangController::class, 'show'])->name('barang.show');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware(['auth', IsAdmin::class]); // Apply IsAdmin middleware here

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/register', [App\Http\Controllers\Auth\LoginController::class, 'register'])->name('register');

Route::post('/detail/{id}', [DetailController::class, 'tampilkan'])->name('detail');
Route::get('/detail/{id}', [DetailController::class, 'tampilkan'])->name('detail');

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/filter', [BarangController::class, 'filter'])->name('filter');

Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');







Route::get('/cart', [CartController::class, 'index'])->name('cart.index')->middleware('auth');

Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');

Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');

Route::post('/delete/{id}', [CartController::class, 'delete'])->name('delete');





Route::get('profile', [ProfileController::class, 'show'])->name('profile');

Route::post('profile', [ProfileController::class, 'update']);





Auth::routes();
