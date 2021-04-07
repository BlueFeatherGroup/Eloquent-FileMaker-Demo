<?php

use App\Http\Controllers\CompanyController;

use App\Http\Controllers\PersonController;
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

Route::get('/companies', [CompanyController::class, 'index'])->name('company-list');
Route::get('/company/{id}', [CompanyController::class, 'get'])->name('company-detail');
Route::get('/people', [PersonController::class, 'index'])->name('person-list');
Route::get('/person/{id}', [PersonController::class, 'get'])->name('person-detail');


