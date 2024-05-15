<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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

Route::get('/login-company', [CompanyAuthController::class, 'login'])->name('company.login');
Route::get('/register-company', [CompanyAuthController::class, 'register'])->name('company.register');
Route::post('register-company-post', [CompanyAuthController::class, 'registerPost'])->name('company.register.post');
Route::post('login-company-post', [CompanyAuthController::class, 'loginPost'])->name('company.login.post');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/pasang-loker', [IndexController::class, 'pasangLoker'])->name('pasangLoker');


Route::get('/landing-page', function () {
    $title = 'Landing Page';
    return view('pages.LandingPageUser', compact('title'));
});
Route::get('/cari-lowongan', function () {
    $title = 'cariLowongan';
    return view('pages.CariLowonganKerja', compact('title'));
});




// companies 
Route::middleware('auth.company')->group(function () {
    Route::get('/after-login', function () {
        $title = "After-Login";
        $company = Auth::guard('company')->user();        
        return view('pages.company.DashboardUser', compact('title', 'company'));
    });
});