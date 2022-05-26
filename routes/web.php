<?php

use App\Http\Livewire\NewCourse;
use App\Http\Livewire\NewCertificate;
use App\Http\Livewire\ValidateCertificate;
use App\Http\Livewire\ValidateCertificateQR;
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

Route::get('/', ValidateCertificate::class)->name('validation');
Route::get('/new_course', NewCourse::class)->name('newCourse');
Route::get('/new_certificate', NewCertificate::class)->name('newCertificate');
Route::get('/qr', ValidateCertificateQR::class)->name('newCertificate');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
