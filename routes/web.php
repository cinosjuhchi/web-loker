    <?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
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

// Route::get('/', [IndexController::class, 'dashboardUser'])->name('dashboardUser');




Route::get('/', [IndexController::class, 'landingPage'])->name('landingPage');
Route::get('/pasang-loker', [IndexController::class, 'pasangLoker'])->name('pasangLoker');
Route::get('/about-us', [IndexController::class, 'aboutUs'])->name('aboutUs');
Route::get('/profile-user', [IndexController::class, 'profilUser'])->name('profilUser');
Route::get('/detail-perusahaan', [IndexController::class, 'detailPerusahaanUserPage'])->name('detailPerusahaanUserPage');
Route::get('/disimpan-user', [IndexController::class, 'disimpanUser'])->name('disimpanUser');
Route::get('/upload-lamaran', [IndexController::class, 'uploadLamaranUser'])->name('uploadLamaranUser');
Route::get('/detail-profile-user', [IndexController::class, 'detailProfileUser'])->name('detailProfileUser');
Route::get('/profil-perusahaan-user', [IndexController::class, 'profilPerusahaanUserPage'])->name('profilPerusahaanUserPage');
Route::get('/profil-perusahaan', [IndexController::class, 'profileCompany'])->name('profileCompany');

Route::get('/pilih-akun', function () {
    $title = 'Akun';
    return view('pages.PilihRegist', compact('title'));
});



Route::middleware('guest')->group(function () {
    Route::get('/login-company', [CompanyAuthController::class, 'login'])->name('company.login');
    Route::get('/register-company', [CompanyAuthController::class, 'register'])->name('company.register');
    Route::post('register-company-post', [CompanyAuthController::class, 'registerPost'])->name('company.register.post');
    Route::post('login-company-post', [CompanyAuthController::class, 'loginPost'])->name('company.login.post');

    Route::get('/register', [AuthController::class, 'register'])->name('user.register');
    Route::get('/login', [AuthController::class, 'login'])->name('user.login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('user.login.post');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('user.register.post');
});


// user
Route::middleware('auth')->group(function () {
    
    Route::get('/dashboard-user', function () {
        $title = 'Dashboard';
        $user = Auth::user();
        $response = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
        if ($response->successful()) {
            $provinces = $response->json();
        } else {
            $provinces = [];
        }               
        return view('pages.DashboardUser', compact('title', 'user', 'provinces'));
    })->name('user.dashboard');
    Route::get('/cari-loker', [IndexController::class, 'cariLoker'])->name('cariLoker');
    
});

// companies
Route::middleware('auth.company')->group(function () {
    Route::get('/after-login', function () {
        $title = "After-Login";
        $company = Auth::guard('company')->user();
        return view('pages.company.DashboardUser', compact('title', 'company'));
    });
});

// Route::get('profil-perusahaan-user', function () {
//     $title = "profil-perusahaan-user";
//     return view('pages.ProfilPerusahaanUser', compact('title'));
// });

// Route::get('disimpan-User', function () {
//     $title = "disimpan-User";
//     return view('pages.DisimpanUser', compact('title'));
// });
