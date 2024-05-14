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

Route::get('/login', [AuthController::class, 'login'])->name('login');

<<<<<<< HEAD
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/landing-page', function () {
    $title = 'Landing Page';
    return view('pages.LandingPageUser', compact('title'));
});
=======
Route::get('/register-user', [AuthController::class, 'register'])->name('register');

Route::get('/register-company', [AuthController::class, 'registerCompany'])->name('registerCompany');
Route::post('company-registration', [CompanyAuthController::class, 'register'])->name('company-registration');
>>>>>>> cf5f21deca1953605a2fc56a61212bc275152761
