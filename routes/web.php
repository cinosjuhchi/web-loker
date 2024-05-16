<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\CompanyAuthController;

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

Route::get('/', function () {
    $title = 'Dashboard';
    return view('pages.DashboardUser', compact('title'));
});

Route::get('/register-user', function() {
    return view('pages.RegisterUser');
})->name('register.user');

Route::get('/register-company', function() {
    return view('pages.RegisterCompany');
})->name('register.company');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/landing-page', function () {
    $title = 'Landing Page';
    return view('pages.LandingPageUser', compact('title'));
});

Route::get('/pilihrole', function () {
    $title = 'Pilih Registrasi';
    return view('pages.PilihRegist', compact('title'));
});
