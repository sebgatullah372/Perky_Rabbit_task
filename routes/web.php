<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;

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
    return view('welcome');
});
//=======Customer Routes===============
Route::get('customer/add', [CustomerController::class, 'create'])->name('customer.create');
Route::post('customer/add', [CustomerController::class, 'store'])->name('customer.store');
//========Product Routes===========
Route::get('product/add', [ProductController::class, 'create'])->name('product.create');
Route::post('product/add', [ProductController::class, 'store'])->name('product.store');
//=======Category Routes==============
Route::get('category/add', [CategoryController::class, 'create'])->name('category.create');
Route::post('category/add', [CategoryController::class, 'store'])->name('category.store');
//======Proposal Routes===================
Route::get('proposal/add', [ProposalController::class, 'create'])->name('proposal.create');


