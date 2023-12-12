<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\AuthController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\CustomerPageController;

// Import Api
use App\Http\Controllers\API\Project\ProjectController;
use App\Http\Controllers\API\Project\CustomerController;
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
// Router Không cần check login 
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => 'check.login'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home_page');
});

Route::group(['prefix' => 'project', 'middleware' => 'check.login'], function () {
    
});
Route::group(['prefix' => 'customer', 'middleware' => 'check.login'], function () {
    Route::get('/', [CustomerPageController::class, 'index'])->name('view.customer.index');
    Route::get('/create', [CustomerPageController::class, 'create'])->name('view.customer.create');
    Route::post('/', [CustomerPageController::class, 'store'])->name('view.customer.store');
    Route::get('/{id}/edit', [CustomerPageController::class, 'edit'])->name('view.customer.edit');
    Route::put('/{id}', [CustomerPageController::class, 'update'])->name('view.customer.update');
    Route::delete('/{id}', [CustomerPageController::class, 'destroy'])->name('view.customer.destroy');
});

// Router Api Website

Route::group(['prefix' => 'api', 'middleware' => 'check.login'], function () {
    Route::get('/projects', [ProjectController::class, 'index'])->name('api.projects.list');
    Route::get('/customers', [CustomerController::class, 'index'])->name('api.customers.list');
});