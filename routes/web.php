<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\AuthController;
use App\Http\Controllers\Pages\HomeController;

use App\Http\Controllers\Pages\Customer\CustomerPageController;
use App\Http\Controllers\Pages\Customer\CustomerOfficePageController;
use App\Http\Controllers\Pages\Customer\CustomerStaffPageController;

use App\Http\Controllers\Pages\Company\CompanyPageController;
use App\Http\Controllers\Pages\Company\CompanyOfficePageController;
use App\Http\Controllers\Pages\Company\CompanystaffPageController;

// Import Api
use App\Http\Controllers\API\Project\ProjectController;

use App\Http\Controllers\API\Customer\CustomerController;
use App\Http\Controllers\API\Customer\CustomerOfficeController;
use App\Http\Controllers\API\Customer\CustomerStaffController;

use App\Http\Controllers\API\Company\CompanyController;
use App\Http\Controllers\API\Company\CompanyOfficeController;
use App\Http\Controllers\API\Company\CompanystaffController;


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

//customer

Route::group(['prefix' => 'customer', 'middleware' => 'check.login'], function () {
    Route::get('/', [CustomerPageController::class, 'index'])->name('view.customer.index');
    Route::get('/create', [CustomerPageController::class, 'create'])->name('view.customer.create');
    Route::post('/', [CustomerPageController::class, 'store'])->name('view.customer.store');
    Route::get('/{id}/edit', [CustomerPageController::class, 'edit'])->name('view.customer.edit');
    Route::put('/{id}', [CustomerPageController::class, 'update'])->name('view.customer.update');
    Route::delete('/{id}', [CustomerPageController::class, 'destroy'])->name('view.customer.destroy');
});
Route::group(['prefix' => 'customer-office', 'middleware' => 'check.login'], function () {
    Route::get('/create/{customer_id}', [CustomerOfficePageController::class, 'create'])->name('view.customer_office.create');
    Route::post('/{customer_id}', [CustomerOfficePageController::class, 'store'])->name('view.customer_office.store');
    Route::get('/{id}/edit', [CustomerOfficePageController::class, 'edit'])->name('view.customer_office.edit');
    Route::put('/{id}', [CustomerOfficePageController::class, 'update'])->name('view.customer_office.update');
    Route::delete('/{id}', [CustomerOfficePageController::class, 'destroy'])->name('view.customer_office.destroy');
});

Route::group(['prefix' => 'customer-staff', 'middleware' => 'check.login'], function () {
    Route::get('/create/{customer_office_id}', [CustomerStaffPageController::class, 'create'])->name('view.customer_staff.create');
    Route::post('/{customer_office_id}', [CustomerStaffPageController::class, 'store'])->name('view.customer_staff.store');
    Route::get('/{id}/edit', [CustomerStaffPageController::class, 'edit'])->name('view.customer_staff.edit');
    Route::put('/{id}', [CustomerStaffPageController::class, 'update'])->name('view.customer_staff.update');
    Route::delete('/{id}', [CustomerStaffPageController::class, 'destroy'])->name('view.customer_staff.destroy');
});


// Router Api Website

Route::group(['prefix' => 'company', 'middleware' => 'check.login'], function () {
    Route::get('/', [CompanyPageController::class, 'index'])->name('view.company.index');
    Route::get('/create', [CompanyPageController::class, 'create'])->name('view.company.create');
    Route::post('/', [CompanyPageController::class, 'store'])->name('view.company.store');
    Route::get('/{id}/edit', [CompanyPageController::class, 'edit'])->name('view.company.edit');
    Route::put('/{id}', [CompanyPageController::class, 'update'])->name('view.company.update');
    Route::delete('/{id}', [CompanyPageController::class, 'destroy'])->name('view.company.destroy');
});
Route::group(['prefix' => 'company-office', 'middleware' => 'check.login'], function () {
    Route::get('/create/{company_id}', [CompanyOfficePageController::class, 'create'])->name('view.company_office.create');
    Route::post('/{company_id}', [CompanyOfficePageController::class, 'store'])->name('view.company_office.store');
    Route::get('/{id}/edit', [CompanyOfficePageController::class, 'edit'])->name('view.company_office.edit');
    Route::put('/{id}', [CompanyOfficePageController::class, 'update'])->name('view.company_office.update');
    Route::delete('/{id}', [CompanyOfficePageController::class, 'destroy'])->name('view.company_office.destroy');
});

Route::group(['prefix' => 'company-staff', 'middleware' => 'check.login'], function () {
    Route::get('/create/{company_office_id}', [CompanystaffPageController::class, 'create'])->name('view.company_staff.create');
    Route::post('/{company_office_id}', [CompanystaffPageController::class, 'store'])->name('view.company_staff.store');
    Route::get('/{id}/edit', [CompanystaffPageController::class, 'edit'])->name('view.company_staff.edit');
    Route::put('/{id}', [CompanystaffPageController::class, 'update'])->name('view.company_staff.update');
    Route::delete('/{id}', [CompanystaffPageController::class, 'destroy'])->name('view.company_staff.destroy');
});


// Router Api Website

Route::group(['prefix' => 'api', 'middleware' => 'check.login'], function () {
    Route::get('/projects', [ProjectController::class, 'index'])->name('api.projects.list');

    Route::group(['prefix' => 'customers'], function () {
        Route::get('/customers', [CustomerController::class, 'index'])->name('api.customers.list');
        Route::get('/customer-offices', [CustomerOfficeController::class, 'index'])->name('api.customer_offices.list');
        Route::get('/customer-staffs', [CustomerStaffController::class, 'index'])->name('api.customer_staffs.list');
    });
    Route::group(['prefix' => 'companies'], function () {
        Route::get('/companies', [CompanyController::class, 'index'])->name('api.companies.list');
        Route::get('/company-offices', [CompanyOfficeController::class, 'index'])->name('api.company_offices.list');
        Route::get('/company-staffs', [CompanystaffController::class, 'index'])->name('api.company_staffs.list');
    });
});
