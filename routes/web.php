<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('welcome');});

Route::get('/hakkimda',
    [\App\Http\Controllers\HomeController::class, 'ShowUsers']);

Route::get('/urunler',
    [\App\Http\Controllers\HomeController::class, 'ShowProducts']);

Route::get('/create-product', [\App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::post('/save-product', [\App\Http\Controllers\ProductController::class,'store'])->name('product.save');
