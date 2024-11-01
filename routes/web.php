<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolePermissionController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;

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
    // return view('welcome');
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

// Category
Route::post('/submit_category', [CategoryController::class, 'submitCategory'])->name('submit_category');
Route::get('/categories', [CategoryController::class, 'categories'])->name('categories');

// products Routes
Route::get('/products', [DashboardController::class, 'products'])->name('products');
Route::get('/product_create', [DashboardController::class, 'productCreate'])->name('product_create');

Route::get('/variations', [DashboardController::class, 'variations'])->name('variations');
Route::get('/brands', [DashboardController::class, 'brands'])->name('brands');
Route::get('/units', [DashboardController::class, 'units'])->name('units');
Route::get('/base_units', [DashboardController::class, 'baseUnits'])->name('base_units');
Route::get('/print_parcode', [DashboardController::class, 'printBarcode'])->name('print_parcode');

// adjustments Routes
Route::get('/adjustments', [DashboardController::class, 'adjustments'])->name('adjustments');
Route::get('/adjustment_create', [DashboardController::class, 'adjustmentCreate'])->name('adjustment_create');



