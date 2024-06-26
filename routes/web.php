    <?php


    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Http;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\IndexController;
    use App\Http\Controllers\Auth\AuthController;
    use App\Http\Controllers\Auth\CompanyAuthController;
    use App\Models\Post;

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
    // ini
    // ini user
    Route::get('/detail-perusahaan/{id_company}/posts', [IndexController::class, 'detailPerusahaanUserPage'])->name('detailPerusahaanUserPage');
    // ini user
    Route::get('/disimpan-user', [IndexController::class, 'disimpanUser'])->name('disimpanUser');
    // ini user
    Route::get('/upload-lamaran/{post}/{company}', [IndexController::class, 'uploadLamaranUser'])->name('uploadLamaranUser');
    Route::post('/upload-lamaran-post', [IndexController::class, 'prosesupLamaranUser'])->name('postlamaran');
    // ini 
    Route::get('/detail-profile-user', [IndexController::class, 'detailProfileUser'])->name('detailProfileUser');

    Route::get('/profil-perusahaan-user', [IndexController::class, 'profilPerusahaanUserPage'])->name('company.user.profile');
    // ini
    Route::get('/profil-perusahaan', [IndexController::class, 'profileCompany'])->name('company.profile');
    // ini
    Route::get('/pelamar-kerja', [IndexController::class, 'pelamarKerja'])->name('pelamarKerja');
    // ini
    Route::get('/dashboard-company', [IndexController::class, 'dashboardCompany'])->name('dashboardCompany');
    // ini
    Route::get('/ubah-loker', [IndexController::class, 'ubahLoker'])->name('ubahLoker');
    // ini
    Route::get('/pasang-lowongan', [IndexController::class, 'pasangLowongan'])->name('pasangLowongan');
    Route::get('/pasang-loker', [IndexController::class, 'pasangLoker'])->name('pasangLoker');
    Route::get('/about-us', [IndexController::class, 'aboutUs'])->name('aboutUs');
    // ini
    Route::get('/profile-user', [IndexController::class, 'profilUser'])->name('profilUser');
    // ini user
    Route::get('/detail-perusahaan/{id_company}/posts', [IndexController::class, 'detailPerusahaanUserPage'])->name('detailPerusahaanUserPage');
    // ini user
    
    // ini user
    Route::get('/upload-lamaran', [IndexController::class, 'uploadLamaranUser'])->name('uploadLamaranUser');
    // ini 

    Route::get('/profil-perusahaan-user', [IndexController::class, 'profilPerusahaanUserPage'])->name('company.user.profile');
    // ini

    // ini
    // ini
    Route::get('/dashboard-company', [IndexController::class, 'dashboardCompany'])->name('dashboardCompany');
    // ini
    Route::get('/ubah-loker', [IndexController::class, 'ubahLoker'])->name('ubahLoker');
    // ini

    Route::get('/pilih-akun', function () {
        $title = 'Akun';
        return view('pages.PilihRegist', compact('title'));
    });

    Route::middleware('guest')->group(function () {
        Route::get('/', [IndexController::class, 'landingPage'])->name('landingPage');
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
    Route::middleware('auth:web')->group(function () {
        Route::post('/logout', [IndexController::class, 'logout']);
        Route::get('/', [IndexController::class, 'landingPage'])->name('landingPage');
        Route::get('/profile-user', [IndexController::class, 'profilUser'])->name('profilUser');
        Route::put('/profile-user', [IndexController::class, 'profilUser'])->name('puu');
        Route::put('/profile-user', [AuthController::class, 'updateUser'])->name('puu');
        Route::get('/disimpan-user', [IndexController::class, 'disimpanUser'])->name('disimpanUser');
        Route::get('/disimpan-user/{id}', [IndexController::class, 'simpanPost'])->name('disimpanUserPost');
        Route::get('/dihapus-user/{id}', [IndexController::class, 'hapusUserPost'])->name('hapusUserPost');
        Route::get('/dashboard-user', function () {
            $title = 'Dashboard';
            $user = Auth::user();
            $response = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
            if ($response->successful()) {
                $provinces = $response->json();
            } else {
                $provinces = [];
            }
            
            $user = Auth::user();

            $postsQuery = Post::with('category');

            $posts = $postsQuery->get();
            return view('pages.DashboardUser', compact('title', 'user', 'provinces', 'posts', 'user'));
        })->name('user.dashboard');
        Route::get('/cari-loker', [IndexController::class, 'cariLoker'])->name('cariLoker');
    });

    // companies
    Route::middleware('auth:company')->group(function () {
        Route::get('/', [IndexController::class, 'landingPage'])->name('landingPage');
        Route::get('/pasang-lowongan', [IndexController::class, 'pasangLowongan'])->name('pasangLowongan');
        Route::get('/dashboard-company', [IndexController::class, 'dashboardCompany'])->name('company.dashboard');
        Route::post('/logout-company', [CompanyAuthController::class, 'logout'])->name('company.logout');
        Route::get('/loker-company', [IndexController::class, 'lokerCompany'])->name('lokerCompany');
        Route::get('/profile-company', [IndexController::class, 'profileCompany'])->name('company.profile');
        Route::post('/profile-company-update', [IndexController::class, 'updateCompany'])->name('company.profile.update');
        Route::get('/simpan-pelamar/{id}', [IndexController::class, 'simpanPelamar'])->name('company.simpanPelamar.store');
        Route::get('/hapus-pelamar/{id}', [IndexController::class, 'hapusPelamar'])->name('company.simpanPelamar.delete');
        Route::get('/pelamar-kerja', [IndexController::class, 'pelamarKerja'])->name('pelamarKerja');
        Route::get('/detail-profile-user/{resumeId}', [IndexController::class, 'detailProfileUser'])->name('detailProfileUser');
        Route::post('/post-store', [IndexController::class, 'postLowongan'])->name('company.post.store');
        Route::get('/pdf-preview/{id}', [IndexController::class, 'pdfPreview'])->name('company.preview.pdf');
        Route::get('/detail-postingan/{id}', [IndexController::class, 'detailPost'])->name('company.detail.post');
        Route::post('/update-loker', [IndexController::class, 'updateLoker'])->name('company.loker.update');
        
    });

    // Route::get('dashboard-company', function () {
    //     $title = "dashboard-company";
    //     return view('pages/company.DashboardUser', compact('title'));
    // });
    // Route::get('loker-company', function () {
    //     $title = "loker-company";
    //     return view('pages/company.LowonganKerjaCompany', compact('title'));
    // });

    // Route::get('disimpan-User', function () {
    //     $title = "disimpan-User";
    //     return view('pages.DisimpanUser', compact('title'));
    // });
