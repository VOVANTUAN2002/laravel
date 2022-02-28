<?php

use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});


Route::resource('customers', CustomersController::class);
Route::get('search', [CustomersController::class, 'search'])->name('customers.search');

// Route::get('create', [CustomersController::class, 'create'])->name('customers.create');

// Route::get('store', [CustomersController::class, 'store'])->name('customers.store');

// Route::get('/delete/{id}',[CartController::class,'destroy'])->name('customers.destroy');

