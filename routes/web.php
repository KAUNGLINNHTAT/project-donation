<?php

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

Route::get('donation/cdm', [\App\Http\Controllers\DonationController::class, 'cdm'])->name('donation.cdm');
Route::post('donation/cdm', [\App\Http\Controllers\DonationController::class, 'save']);
Route::get('certificate/{id}', [\App\Http\Controllers\DonationController::class, 'certificate'])->name('donations.certificate');


Auth::routes();
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', function () {
        return view('webctrl.layouts.app');
    })->where('any', '*');
    // Route::get('certificate', [\App\Http\Controllers\Admin\CertificateController::class, 'index'])->name('certificate');
    // Route::get('certificate/show/{id}', [\App\Http\Controllers\Admin\CertificateController::class, 'show'])->name('certificate.show');
    // Route::get('certificate/delete/{id}', [\App\Http\Controllers\Admin\CertificateController::class, 'delete'])->name('certificate.delete');
    // Route::get('certificate/confirm/{id}', [\App\Http\Controllers\Admin\CertificateController::class, 'confirm'])->name('certificate.confirm');
    // Route::post('certificate/confirm/{id}', [\App\Http\Controllers\Admin\CertificateController::class, 'finish']);
});
