<?php



use App\Http\Livewire\Courses;
use App\Http\Livewire\NewCourse;
use App\Http\Livewire\Certificates;
use App\Http\Livewire\DCertificates;
use App\Http\Livewire\NewCertificate;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ValidateCertificate;
use App\Http\Livewire\NewDeviceCertificate;
use App\Http\Livewire\ValidateCertificateQR;

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

Route::get('/dashboard', ValidateCertificate::class)->name('validation');
Route::get('/', ValidateCertificate::class)->name('validation');
Route::get('/qr', ValidateCertificateQR::class)->name('qr');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/new_course', NewCourse::class)->name('newCourse');
    Route::get('/certificates', Certificates::class)->name('certificates');
    Route::get('/dcertificates', DCertificates::class)->name('dcertificates');
    Route::get('/courses', Courses::class)->name('courses');
    Route::get('/new_certificate', NewCertificate::class)->name('newCertificate');
    Route::get('/new_dcertificate', NewDeviceCertificate::class)->name('newDCertificate');

});
