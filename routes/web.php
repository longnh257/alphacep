<?php

use App\Http\Controllers\API\AuditReport\AuditReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\AuthController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\Customer\CustomerPageController;
use App\Http\Controllers\Pages\Customer\CustomerOfficePageController;
use App\Http\Controllers\Pages\Customer\CustomerStaffPageController;
use App\Http\Controllers\Pages\Company\CompanyPageController;
use App\Http\Controllers\Pages\Company\CompanyOfficePageController;
use App\Http\Controllers\Pages\Company\CompanystaffPageController;
use App\Http\Controllers\Pages\Function\FunctionPageController;
use App\Http\Controllers\Pages\FunctionCategory\FunctionCategoryPageController;
use App\Http\Controllers\Pages\Nationality\NationalityPageController;
use App\Http\Controllers\Pages\NativeLanguage\NativeLanguagePageController;
use App\Http\Controllers\Pages\SendingAgency\SendingAgencyPageController;
use App\Http\Controllers\Pages\Trainee\TraineeRelativePageController;
use App\Http\Controllers\Pages\Trainee\TraineePageController;
use App\Http\Controllers\Pages\Project\ProjectPageController;
use App\Http\Controllers\Pages\Project\ProjectTraineePageController;
use App\Http\Controllers\Pages\Project\ProjectWorkPageController;
use App\Http\Controllers\Pages\Project\ProjectWorkTaskPageController;
use App\Http\Controllers\Pages\Project\ProjectWorkTaskFilePageController;
use App\Http\Controllers\Pages\Project\ProjectTraineeContractPageController;
use App\Http\Controllers\Pages\Work\WorkPageController;
use App\Http\Controllers\Pages\Work\WorkFlowPageController;
use App\Http\Controllers\Pages\AuditReport\AuditReportPageController;
use App\Http\Controllers\Pages\Project\ProjectDocumentPageController;
use App\Http\Controllers\Pages\TrainingFacility\TrainingFacilityPageController;
use App\Http\Controllers\Pages\VisitGuidanceRecord\VisitGuidanceRecordDetailPageController;
use App\Http\Controllers\Pages\VisitGuidanceRecord\VisitGuidanceRecordPageController;
use App\Http\Controllers\Pages\Document\DocumentTemplatePageController;
use App\Http\Controllers\Pages\Work\WorkingHourPageController;


// Import Api
use App\Http\Controllers\API\Project\ProjectController;
use App\Http\Controllers\API\Project\ProjectTraineeController;
use App\Http\Controllers\API\Project\ProjectTraineeContractController;
use App\Http\Controllers\API\Project\ProjectWorkController;
use App\Http\Controllers\API\Project\ProjectWorkTaskController;
use App\Http\Controllers\API\Project\ProjectWorkTaskFileController;
use App\Http\Controllers\API\Work\WorkController;
use App\Http\Controllers\API\Work\WorkFlowController;
use App\Http\Controllers\API\Customer\CustomerController;
use App\Http\Controllers\API\Customer\CustomerOfficeController;
use App\Http\Controllers\API\Customer\CustomerStaffController;
use App\Http\Controllers\API\Company\CompanyController;
use App\Http\Controllers\API\Company\CompanyOfficeController;
use App\Http\Controllers\API\Company\CompanystaffController;
use App\Http\Controllers\API\Function\FunctionController;
use App\Http\Controllers\API\FunctionCategory\FunctionCategoryController;
use App\Http\Controllers\API\Nationality\NationalityController;
use App\Http\Controllers\API\NativeLanguage\NativeLanguageController;
use App\Http\Controllers\API\Project\ProjectDocumentAttributeController;
use App\Http\Controllers\API\Project\ProjectDocumentController;
use App\Http\Controllers\API\SendingAgency\SendingAgencyController;
use App\Http\Controllers\API\Trainee\TraineeController;
use App\Http\Controllers\API\Trainee\TraineeRelativeController;
use App\Http\Controllers\API\TrainingFacility\TrainingFacilityController;
use App\Http\Controllers\API\VisitGuidanceRecord\VisitGuidanceRecordController;
use App\Http\Controllers\API\VisitGuidanceRecord\VisitGuidanceRecordDetailController;
use App\Http\Controllers\API\Document\DocumentAttributeController;
use App\Http\Controllers\API\Document\DocumentTemplateController;
use App\Http\Controllers\API\Work\WorkingHourController;

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
    Route::get('/', [CustomerOfficePageController::class, 'index'])->name('view.customer_office.index');
    Route::get('/create', [CustomerOfficePageController::class, 'create'])->name('view.customer_office.create');
    Route::post('/', [CustomerOfficePageController::class, 'store'])->name('view.customer_office.store');
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

//end company

//Project
Route::group(['prefix' => 'project', 'middleware' => 'check.login'], function () {
    Route::get('/', [ProjectPageController::class, 'index'])->name('view.project.index');
    Route::get('/create', [ProjectPageController::class, 'create'])->name('view.project.create');
    Route::post('/', [ProjectPageController::class, 'store'])->name('view.project.store');
    Route::get('/{id}/edit', [ProjectPageController::class, 'edit'])->name('view.project.edit');
    Route::put('/{id}', [ProjectPageController::class, 'update'])->name('view.project.update');
    Route::delete('/{id}', [ProjectPageController::class, 'destroy'])->name('view.project.destroy');
});


Route::group(['prefix' => 'project-work', 'middleware' => 'check.login'], function () {
    Route::get('/create/{project_id}', [ProjectWorkPageController::class, 'create'])->name('view.project_work.create');
    Route::post('/{project_id}', [ProjectWorkPageController::class, 'store'])->name('view.project_work.store');
    Route::get('/{id}/edit', [ProjectWorkPageController::class, 'edit'])->name('view.project_work.edit');
    Route::put('/{id}', [ProjectWorkPageController::class, 'update'])->name('view.project_work.update');
    Route::delete('/{id}', [ProjectWorkPageController::class, 'destroy'])->name('view.project_work.destroy');
});

Route::group(['prefix' => 'project-work-task', 'middleware' => 'check.login'], function () {
    Route::get('/create/{project_work_id}', [ProjectWorkTaskPageController::class, 'create'])->name('view.project_work_task.create');
    Route::post('/{project_work_id}', [ProjectWorkTaskPageController::class, 'store'])->name('view.project_work_task.store');
    Route::get('/{id}/edit', [ProjectWorkTaskPageController::class, 'edit'])->name('view.project_work_task.edit');
    Route::put('/{id}', [ProjectWorkTaskPageController::class, 'update'])->name('view.project_work_task.update');
    Route::delete('/{id}', [ProjectWorkTaskPageController::class, 'destroy'])->name('view.project_work_task.destroy');
});

Route::group(['prefix' => 'project-work-task-file', 'middleware' => 'check.login'], function () {
    Route::get('/create/{project_work_id}', [ProjectWorkTaskFilePageController::class, 'create'])->name('view.project_work_task_file.create');
    Route::post('/{project_work_id}', [ProjectWorkTaskFilePageController::class, 'store'])->name('view.project_work_task_file.store');
    Route::get('/{id}/edit', [ProjectWorkTaskFilePageController::class, 'edit'])->name('view.project_work_task_file.edit');
    Route::put('/{id}', [ProjectWorkTaskFilePageController::class, 'update'])->name('view.project_work_task_file.update');
    Route::delete('/{id}', [ProjectWorkTaskFilePageController::class, 'destroy'])->name('view.project_work_task_file.destroy');
});

Route::group(['prefix' => 'project-trainee', 'middleware' => 'check.login'], function () {
    Route::get('/create/{project_id}', [ProjectTraineePageController::class, 'create'])->name('view.project_trainee.create');
    Route::post('/{project_id}', [ProjectTraineePageController::class, 'store'])->name('view.project_trainee.store');
    Route::get('/{id}/edit', [ProjectTraineePageController::class, 'edit'])->name('view.project_trainee.edit');
    Route::put('/{id}', [ProjectTraineePageController::class, 'update'])->name('view.project_trainee.update');
    Route::delete('/{id}', [ProjectTraineePageController::class, 'destroy'])->name('view.project_trainee.destroy');
});

Route::group(['prefix' => 'project-trainee-contract', 'middleware' => 'check.login'], function () {
    Route::get('/create/{project_trainee_id}', [ProjectTraineeContractPageController::class, 'create'])->name('view.project_trainee_contract.create');
    Route::post('/{project_trainee_id}', [ProjectTraineeContractPageController::class, 'store'])->name('view.project_trainee_contract.store');
    Route::get('/{id}/edit', [ProjectTraineeContractPageController::class, 'edit'])->name('view.project_trainee_contract.edit');
    Route::put('/{id}', [ProjectTraineeContractPageController::class, 'update'])->name('view.project_trainee_contract.update');
    Route::delete('/{id}', [ProjectTraineeContractPageController::class, 'destroy'])->name('view.project_trainee_contract.destroy');
});

Route::group(['prefix' => 'project-document', 'middleware' => 'check.login'], function () {
    Route::get('/create/{project_trainee_id}', [ProjectDocumentPageController::class, 'create'])->name('view.project_document.create');
    Route::post('/{project_trainee_id}', [ProjectDocumentPageController::class, 'store'])->name('view.project_document.store');
    Route::get('/{id}/edit', [ProjectDocumentPageController::class, 'edit'])->name('view.project_document.edit');
    Route::put('/{id}', [ProjectDocumentPageController::class, 'update'])->name('view.project_document.update');
    Route::delete('/{id}', [ProjectDocumentPageController::class, 'destroy'])->name('view.project_document.destroy');
});

Route::group(['prefix' => 'document-template', 'middleware' => 'check.login'], function () {
    Route::get('/', [DocumentTemplatePageController::class, 'index'])->name('view.document_template.index');
    Route::get('/create', [DocumentTemplatePageController::class, 'create'])->name('view.document_template.create');
    Route::post('/', [DocumentTemplatePageController::class, 'store'])->name('view.document_template.store');
    Route::get('/{id}/edit', [DocumentTemplatePageController::class, 'edit'])->name('view.document_template.edit');
    Route::put('/{id}', [DocumentTemplatePageController::class, 'update'])->name('view.document_template.update');
    Route::delete('/{id}', [DocumentTemplatePageController::class, 'destroy'])->name('view.document_template.destroy');
});

//end Project


//visit-guidance
Route::group(['prefix' => 'visit-guidance-record', 'middleware' => 'check.login'], function () {
    Route::get('/', [VisitGuidanceRecordPageController::class, 'index'])->name('view.visit_guidance_record.index');
    Route::get('/create/{company_id}', [VisitGuidanceRecordPageController::class, 'create'])->name('view.visit_guidance_record.create');
    Route::post('/{company_id}', [VisitGuidanceRecordPageController::class, 'store'])->name('view.visit_guidance_record.store');
    Route::get('/{id}/edit', [VisitGuidanceRecordPageController::class, 'edit'])->name('view.visit_guidance_record.edit');
    Route::put('/{id}', [VisitGuidanceRecordPageController::class, 'update'])->name('view.visit_guidance_record.update');
    Route::delete('/{id}', [VisitGuidanceRecordPageController::class, 'destroy'])->name('view.visit_guidance_record.destroy');
});
//end visit-guidance

//visit-guidance-record-detail
Route::group(['prefix' => 'visit-guidance-record-detail', 'middleware' => 'check.login'], function () {
    Route::get('/', [VisitGuidanceRecordDetailPageController::class, 'index'])->name('view.visit_guidance_record_detail.index');
    Route::get('/create/{visit_record_id}', [VisitGuidanceRecordDetailPageController::class, 'create'])->name('view.visit_guidance_record_detail.create');
    Route::post('/{visit_record_id}', [VisitGuidanceRecordDetailPageController::class, 'store'])->name('view.visit_guidance_record_detail.store');
    Route::get('/{id}/edit', [VisitGuidanceRecordDetailPageController::class, 'edit'])->name('view.visit_guidance_record_detail.edit');
    Route::put('/{id}', [VisitGuidanceRecordDetailPageController::class, 'update'])->name('view.visit_guidance_record_detail.update');
    Route::delete('/{id}', [VisitGuidanceRecordDetailPageController::class, 'destroy'])->name('view.visit_guidance_record_detail.destroy');
});
//end visit-guidance-record-detail

//audit report
Route::group(['prefix' => 'audit-report', 'middleware' => 'check.login'], function () {
    Route::get('/', [AuditReportPageController::class, 'index'])->name('view.audit_report.index');
    Route::get('/create', [AuditReportPageController::class, 'create'])->name('view.audit_report.create');
    Route::post('/', [AuditReportPageController::class, 'store'])->name('view.audit_report.store');
    Route::get('/{id}/edit', [AuditReportPageController::class, 'edit'])->name('view.audit_report.edit');
    Route::put('/{id}', [AuditReportPageController::class, 'update'])->name('view.audit_report.update');
    Route::delete('/{id}', [AuditReportPageController::class, 'destroy'])->name('view.audit_report.destroy');
});
//end audit report

//work
Route::group(['prefix' => 'work', 'middleware' => 'check.login'], function () {
    Route::get('/', [WorkPageController::class, 'index'])->name('view.work.index');
    Route::get('/create', [WorkPageController::class, 'create'])->name('view.work.create');
    Route::post('/', [WorkPageController::class, 'store'])->name('view.work.store');
    Route::get('/{id}/edit', [WorkPageController::class, 'edit'])->name('view.work.edit');
    Route::put('/{id}', [WorkPageController::class, 'update'])->name('view.work.update');
    Route::delete('/{id}', [WorkPageController::class, 'destroy'])->name('view.work.destroy');
});
//end work

//workflow
Route::group(['prefix' => 'workflow', 'middleware' => 'check.login'], function () {
    Route::get('/', [WorkFlowPageController::class, 'index'])->name('view.workflow.index');
    Route::get('/create', [WorkFlowPageController::class, 'create'])->name('view.workflow.create');
    Route::post('/', [WorkFlowPageController::class, 'store'])->name('view.workflow.store');
    Route::get('/{id}/edit', [WorkFlowPageController::class, 'edit'])->name('view.workflow.edit');
    Route::put('/{id}', [WorkFlowPageController::class, 'update'])->name('view.workflow.update');
    Route::delete('/{id}', [WorkFlowPageController::class, 'destroy'])->name('view.workflow.destroy');
});
//end workflow

//working hour
Route::group(['prefix' => 'working-hour', 'middleware' => 'check.login'], function () {
    Route::get('/', [WorkingHourPageController::class, 'index'])->name('view.working_hour.index');
    Route::get('/create', [WorkingHourPageController::class, 'create'])->name('view.working_hour.create');
    Route::post('/', [WorkingHourPageController::class, 'store'])->name('view.working_hour.store');
    Route::get('/{id}/edit', [WorkingHourPageController::class, 'edit'])->name('view.working_hour.edit');
    Route::put('/{id}', [WorkingHourPageController::class, 'update'])->name('view.working_hour.update');
    Route::delete('/{id}', [WorkingHourPageController::class, 'destroy'])->name('view.working_hour.destroy');
});
//end working hour

Route::group(['prefix' => 'function', 'middleware' => 'check.login'], function () {
    Route::get('/', [FunctionPageController::class, 'index'])->name('view.function.index');
    Route::get('/create', [FunctionPageController::class, 'create'])->name('view.function.create');
    Route::post('/', [FunctionPageController::class, 'store'])->name('view.function.store');
    Route::get('/{id}/edit', [FunctionPageController::class, 'edit'])->name('view.function.edit');
    Route::put('/{id}', [FunctionPageController::class, 'update'])->name('view.function.update');
    Route::delete('/{id}', [FunctionPageController::class, 'destroy'])->name('view.function.destroy');
});
Route::group(['prefix' => 'function-category', 'middleware' => 'check.login'], function () {
    Route::get('/', [FunctionCategoryPageController::class, 'index'])->name('view.function_category.index');
    Route::get('/create', [FunctionCategoryPageController::class, 'create'])->name('view.function_category.create');
    Route::post('/', [FunctionCategoryPageController::class, 'store'])->name('view.function_category.store');
    Route::get('/{id}/edit', [FunctionCategoryPageController::class, 'edit'])->name('view.function_category.edit');
    Route::put('/{id}', [FunctionCategoryPageController::class, 'update'])->name('view.function_category.update');
    Route::delete('/{id}', [FunctionCategoryPageController::class, 'destroy'])->name('view.function_category.destroy');
});


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

//trainee

Route::group(['prefix' => 'training-facility', 'middleware' => 'check.login'], function () {
    Route::get('/', [TrainingFacilityPageController::class, 'index'])->name('view.training_facility.index');
    Route::get('/create', [TrainingFacilityPageController::class, 'create'])->name('view.training_facility.create');
    Route::post('/', [TrainingFacilityPageController::class, 'store'])->name('view.training_facility.store');
    Route::get('/{id}/edit', [TrainingFacilityPageController::class, 'edit'])->name('view.training_facility.edit');
    Route::put('/{id}', [TrainingFacilityPageController::class, 'update'])->name('view.training_facility.update');
    Route::delete('/{id}', [TrainingFacilityPageController::class, 'destroy'])->name('view.training_facility.destroy');
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
    Route::get('/project-trainees', [ProjectTraineeController::class, 'index'])->name('api.project_trainees.list');
    Route::get('/project-trainee-contracts', [ProjectTraineeContractController::class, 'index'])->name('api.project_trainee_contracts.list');
    Route::get('/project-documents', [ProjectDocumentController::class, 'index'])->name('api.project-documents.list');
    Route::get('/project-document-attributes', [ProjectDocumentAttributeController::class, 'index'])->name('api.project-document-attributes.list');

    Route::get('/project-works', [ProjectWorkController::class, 'index'])->name('api.project_works.list');
    Route::get('/project-work-tasks', [ProjectWorkTaskController::class, 'index'])->name('api.project_work_tasks.list');
    Route::get('/project-work-task-files', [ProjectWorkTaskFileController::class, 'index'])->name('api.project_work_task_files.list');

    Route::get('/document-templates', [DocumentTemplateController::class, 'index'])->name('api.document_templates.list');
    Route::get('/document-attributes', [DocumentAttributeController::class, 'index'])->name('api.document_attributes.list');

    Route::get('/visit-guidance-records', [VisitGuidanceRecordController::class, 'index'])->name('api.visit_guidance_records.list');

    Route::get('/visit-guidance-record-details', [VisitGuidanceRecordDetailController::class, 'index'])->name('api.visit_guidance_record_details.list');

    Route::get('/audit-reports', [AuditReportController::class, 'index'])->name('api.audit_reports.list');

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


    Route::group(['prefix' => 'functions'], function () {
        Route::get('/', [FunctionController::class, 'index'])->name('api.functions.list');
    });
    Route::group(['prefix' => 'function-categories'], function () {
        Route::get('/', [FunctionCategoryController::class, 'index'])->name('api.function_categories.list');
    });

    Route::group(['prefix' => 'trainees'], function () {
        Route::get('/trainees', [TraineeController::class, 'index'])->name('api.trainees.list');
    });

    Route::group(['prefix' => 'trainee-relatives'], function () {
        Route::get('/trainee-relatives', [TraineeRelativeController::class, 'index'])->name('api.trainee_relatives.list');
    });

    Route::group(['prefix' => 'training-facilities'], function () {
        Route::get('/training-facilities', [TrainingFacilityController::class, 'index'])->name('api.training_facilities.list');
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

    Route::group(['prefix' => 'works'], function () {
        Route::get('/', [WorkController::class, 'index'])->name('api.works.list');
    });

    Route::group(['prefix' => 'working-hours'], function () {
        Route::get('/', [WorkingHourController::class, 'index'])->name('api.working_hours.list');
    });

    Route::group(['prefix' => 'workflows'], function () {
        Route::get('/', [WorkFlowController::class, 'index'])->name('api.workflows.list');
    });
});
