<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\AuthController;
use App\Http\Controllers\Pages\HomeController;

// Import Api
use App\Http\Controllers\API\Project\ProjectController;
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

Route::group(['prefix' => 'api', 'middleware' => 'check.login'], function () {
    Route::get('/project', [ProjectController::class, 'index'])->name('project_list');
});