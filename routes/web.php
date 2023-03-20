<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
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

Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);

// Route::controller(OrderController::class)->group(function () {
// Route::get('/orders/{id}', 'add');
// });
// Route::prefix('orders')->group(function(){
//     Route::get('/{id}',[OrderController::class,'add']);

// });
Route::get('orders/{id}/add', [OrderController::class, 'add'])->name('orders.add');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
