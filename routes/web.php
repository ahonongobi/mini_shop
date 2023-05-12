<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addproduct', [App\Http\Controllers\ProductController::class, 'addProduct'])->name('add-product');
Route::get('/category', [App\Http\Controllers\ProductController::class, 'addCategory'])->name('add-category');
Route::post('/addcategory', [App\Http\Controllers\ProductController::class, 'addCategoryPost'])->name('add-categoryPost');


