<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signinController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\userController;
use App\Http\Controllers\companyController;
use App\Http\Controllers\licenseController;
use App\Http\Controllers\acyController;
use App\Http\Controllers\privController;
use App\Http\Controllers\softController;
use App\Http\Controllers\softypeController;
use App\Http\Controllers\vendorController;

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

//Auth::routes();
Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/login', [signinController::class, 'login'])->name('login');
Route::post('/login', [signinController::class, 'postlogin'])->name('postlogin');
Route::post('/logout', [signinController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {


Route::get('/dashboard', [dashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/downloadPDF', [dashboardController::class, 'downloadPDF'])->name('downloadPDF');
Route::get('/downloadExcel', [dashboardController::class, 'exportExcel'])->name('exportExcel');



Route::get('/privileges/index', [privController::class, 'index'])->name('privileges.index');
Route::post('/privileges/index', [privController::class, 'assign'])->name('privileges.assign');
Route::get('/privileges/{id}/revoke', [privController::class, 'revoke'])->name('privileges.revoke');

Route::get('/company/index', [companyController::class, 'index'])->name('company.index');
Route::get('/company/add', [companyController::class, 'add'])->name('company.add');
Route::post('/company/add', [companyController::class, 'save'])->name('company.save');
Route::get('/company/{id}/edit', [companyController::class, 'edit'])->name('company.edit');
Route::post('/company/{id}/edit', [companyController::class, 'update'])->name('company.update');
Route::get('/company/{id}/delete', [companyController::class, 'delete'])->name('company.delete');

Route::get('/subscription/index', [licenseController::class, 'index'])->name('subscription.index');
Route::get('/subscription/add', [licenseController::class, 'add'])->name('subscription.add');
Route::post('/subscription/add', [licenseController::class, 'save'])->name('subscription.save');
Route::get('/subscription/{id}/edit', [licenseController::class, 'edit'])->name('subscription.edit');
Route::post('/subscription/{id}/edit', [licenseController::class, 'update'])->name('subscription.update');
Route::get('/subscription/{id}/delete', [licenseController::class, 'delete'])->name('subscription.delete');

Route::get('/ays/active', [acyController::class, 'activate'])->name('ays.activate');

Route::get('/ays/index', [acyController::class, 'index'])->name('ays.index');
Route::get('/ays/add', [acyController::class, 'add'])->name('ays.add');
Route::post('/ays/add', [acyController::class, 'save'])->name('ays.save');
Route::get('/ays/{id}/edit', [acyController::class, 'edit'])->name('ays.edit');
Route::post('/ays/{id}/edit', [acyController::class, 'update'])->name('ays.update');
Route::get('/ays/{id}/delete', [acyController::class, 'delete'])->name('ays.delete');
Route::get('/ays/{id}/active', [acyController::class, 'update_active'])->name('ays.update_active');

Route::get('/software/index', [softController::class, 'index'])->name('software.index');
Route::get('/software/add', [softController::class, 'add'])->name('software.add');
Route::post('/software/add', [softController::class, 'save'])->name('software.save');
Route::get('/software/{id}/edit', [softController::class, 'edit'])->name('software.edit');
Route::post('/software/{id}/edit', [softController::class, 'update'])->name('software.update');
Route::get('/software/{id}/delete', [softController::class, 'delete'])->name('software.delete');

Route::get('/SoftwareType/index', [softypeController::class, 'index'])->name('SoftwareType.index');
Route::get('/SoftwareType/add', [softypeController::class, 'add'])->name('SoftwareType.add');
Route::post('/SoftwareType/add', [softypeController::class, 'save'])->name('SoftwareType.save');
Route::get('/SoftwareType/{id}/edit', [softypeController::class, 'edit'])->name('SoftwareType.edit');
Route::post('/SoftwareType/{id}/edit', [softypeController::class, 'update'])->name('SoftwareType.update');
Route::get('/SoftwareType/{id}/delete', [softypeController::class, 'delete'])->name('SoftwareType.delete');

Route::get('/supplier/index', [vendorController::class, 'index'])->name('supplier.index');
Route::get('/supplier/add', [vendorController::class, 'add'])->name('supplier.add');
Route::post('/supplier/add', [vendorController::class, 'save'])->name('supplier.save');
Route::get('/supplier/{id}/edit', [vendorController::class, 'edit'])->name('supplier.edit');
Route::post('/supplier/{id}/edit', [vendorController::class, 'update'])->name('supplier.update');

Route::get('/user/index', [userController::class, 'index'])->name('user.index');
Route::get('/user/add', [userController::class, 'add'])->name('user.add');
Route::post('/user/add', [userController::class, 'save'])->name('user.save');
Route::get('/user/{id}/edit', [userController::class, 'edit'])->name('user.edit');
Route::post('/user/{id}/edit', [userController::class, 'update'])->name('user.update');
Route::get('/user/{id}/delete', [userController::class, 'delete'])->name('user.delete');

});

