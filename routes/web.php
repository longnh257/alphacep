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
use App\Http\Controllers\Pages\Nationality\NationalityPageController;
use App\Http\Controllers\Pages\NativeLanguage\NativeLanguagePageController;
use App\Http\Controllers\Pages\SendingAgency\SendingAgencyPageController;


// Import Api
use App\Http\Controllers\API\Project\ProjectController;
use App\Http\Controllers\API\Customer\CustomerController;
use App\Http\Controllers\API\Customer\CustomerOfficeController;
use App\Http\Controllers\API\Customer\CustomerStaffController;
use App\Http\Controllers\API\Company\CompanyController;
use App\Http\Controllers\API\Company\CompanyOfficeController;
use App\Http\Controllers\API\Company\CompanystaffController;
use App\Http\Controllers\API\Nationality\NationalityController;
use App\Http\Controllers\API\NativeLanguage\NativeLanguageController;
use App\Http\Controllers\API\SendingAgency\SendingAgencyController;
use App\Http\Controllers\API\Trainee\TraineeController;
use App\Http\Controllers\API\TraineeRelative\TraineeRelativeController;
use App\Http\Controllers\Pages\Trainee\TraineePageController;
use App\Http\Controllers\Pages\TraineeRelative\TraineeRelativePageController;

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

//end customer

//company
Route::group(['prefix' => 'company', 'middleware' => 'check.login'], function () {
    Route::get('/', [CompanyPageController::class, 'index'])->name('view.company.index');
    Route::get('/create1', [CompanyPageController::class, 'create'])->name('view.company.create1');
    Route::get('/create/{customer_id}', [CompanyPageController::class, 'create'])->name('view.company.create');
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

//end company


//trainee

Route::group(['prefix' => 'trainee', 'middleware' => 'check.login'], function () {
    Route::get('/', [TraineePageController::class, 'index'])->name('view.trainee.index');
    Route::get('/create', [TraineePageController::class, 'create'])->name('view.trainee.create');
    Route::post('/', [TraineePageController::class, 'store'])->name('view.trainee.store');
    Route::get('/{id}/edit', [TraineePageController::class, 'edit'])->name('view.trainee.edit');
    Route::put('/{id}', [TraineePageController::class, 'update'])->name('view.trainee.update');
    Route::delete('/{id}', [TraineePageController::class, 'destroy'])->name('view.trainee.destroy');
});

//end trainee

//trainee

Route::group(['prefix' => 'trainee-relative', 'middleware' => 'check.login'], function () {
    Route::get('/', [TraineeRelativePageController::class, 'index'])->name('view.trainee_relative.index');
    Route::get('/create', [TraineeRelativePageController::class, 'create'])->name('view.trainee_relative.create');
    Route::post('/', [TraineeRelativePageController::class, 'store'])->name('view.trainee_relative.store');
    Route::get('/{id}/edit', [TraineeRelativePageController::class, 'edit'])->name('view.trainee_relative.edit');
    Route::put('/{id}', [TraineeRelativePageController::class, 'update'])->name('view.trainee_relative.update');
    Route::delete('/{id}', [TraineeRelativePageController::class, 'destroy'])->name('view.trainee_relative.destroy');
});

//end trainee

Route::group(['prefix' => 'nationality', 'middleware' => 'check.login'], function () {
    Route::get('/', [NationalityPageController::class, 'index'])->name('view.nationality.index');
    Route::get('/create', [NationalityPageController::class, 'create'])->name('view.nationality.create');
    Route::post('/', [NationalityPageController::class, 'store'])->name('view.nationality.store');
    Route::get('/{id}/edit', [NationalityPageController::class, 'edit'])->name('view.nationality.edit');
    Route::put('/{id}', [NationalityPageController::class, 'update'])->name('view.nationality.update');
    Route::delete('/{id}', [NationalityPageController::class, 'destroy'])->name('view.nationality.destroy');
});

Route::group(['prefix' => 'native-language', 'middleware' => 'check.login'], function () {
    Route::get('/', [NativeLanguagePageController::class, 'index'])->name('view.native_language.index');
    Route::get('/create', [NativeLanguagePageController::class, 'create'])->name('view.native_language.create');
    Route::post('/', [NativeLanguagePageController::class, 'store'])->name('view.native_language.store');
    Route::get('/{id}/edit', [NativeLanguagePageController::class, 'edit'])->name('view.native_language.edit');
    Route::put('/{id}', [NativeLanguagePageController::class, 'update'])->name('view.native_language.update');
    Route::delete('/{id}', [NativeLanguagePageController::class, 'destroy'])->name('view.native_language.destroy');
});

Route::group(['prefix' => 'sending-agency', 'middleware' => 'check.login'], function () {
    Route::get('/', [SendingAgencyPageController::class, 'index'])->name('view.sending_agency.index');
    Route::get('/create', [SendingAgencyPageController::class, 'create'])->name('view.sending_agency.create');
    Route::post('/', [SendingAgencyPageController::class, 'store'])->name('view.sending_agency.store');
    Route::get('/{id}/edit', [SendingAgencyPageController::class, 'edit'])->name('view.sending_agency.edit');
    Route::put('/{id}', [SendingAgencyPageController::class, 'update'])->name('view.sending_agency.update');
    Route::delete('/{id}', [SendingAgencyPageController::class, 'destroy'])->name('view.sending_agency.destroy');
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


    Route::group(['prefix' => 'trainees'], function () {
        Route::get('/trainees', [TraineeController::class, 'index'])->name('api.trainees.list');
    });

    Route::group(['prefix' => 'trainee-relatives'], function () {
        Route::get('/trainee-relatives', [TraineeRelativeController::class, 'index'])->name('api.trainee_relatives.list');
    });

    Route::group(['prefix' => 'nationalities'], function () {
        Route::get('/', [NationalityController::class, 'index'])->name('api.nationalities.list');
    });
    Route::group(['prefix' => 'native-languages'], function () {
        Route::get('/', [NativeLanguageController::class, 'index'])->name('api.native_languages.list');
    });
    Route::group(['prefix' => 'sending-agencies'], function () {
        Route::get('/', [SendingAgencyController::class, 'index'])->name('api.sending_agencies.list');
    });
});
