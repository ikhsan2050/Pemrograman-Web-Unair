<?php

use App\Models\product;
use App\Models\category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\allProductController;


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

Route::get('/', [homeController::class, 'index']);

Route::get('/home', [homeController::class, 'index']);

Route::get('/product', [productController::class, 'index']);

Route::get('/product/{singleproduct:slug}', [productController::class, 'show']);

Route::get('/contact', function () {
    return view('contact',[
        'title' => "Contact",
        'active' => "Contact"
    ]);
});

Route::get('/dashboard/products/all', [allProductController::class, 'index']);

Route::get('/dashboard/products/create', function () {
    return view('/dashboard/products/create', [
        'title' => "Add Product"
    ]);
});

Route::get('/dashboard', function () {
    return view('/dashboard/index',[
        'title' => "Dashboard",
        'active' => "Dashboard"
    ]);
});

Route::get('/dashboard/products/edit', function () {
    return view('/dashboard/products/edit',[
        'title' => "Edit",
        'active' => "Edit"
    ]);
});

//Route::get('/dashboard', [DashboardController::class, 'index']);

  