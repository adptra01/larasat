<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LicenseCardController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::prefix('licenseCard')->group(function () {
    route::post('/', [LicenseCardController::class, 'create'])->name('licenseCard.create');
    route::get('/{slug}', [LicenseCardController::class, 'show'])->name('licenseCard.show');
    route::put('/{slug}', [LicenseCardController::class, 'update'])->name('licenseCard.update');
    route::delete('/{slug}', [LicenseCardController::class, 'destroy'])->name('licenseCard.destroy');
});