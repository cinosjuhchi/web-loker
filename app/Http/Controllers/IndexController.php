<?php

namespace App\Http\Controllers;

// use App\Models\resume;
use App\Models\Post;
use App\Models\User;
use App\Models\Resume;
use App\Models\Company;
use App\Models\Bookmark;
use App\Models\Category;
use App\Models\JobCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CompanyBookmark;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    public function uploadLamaranUser(Request $request, $post_id, $company_id)
    {

        $post = Post::findOrFail($post_id);
        $company = Company::findOrFail($company_id);
        $title = "Upload Lamaran";
        // $post = Post::find($request->post_id);
        // $company = Company::find($request->company_id);
        return view("pages.UploadLamaranUser", compact("title", "post", "company"))->with('success', 'File uploaded successfully.');
    }

    public function prosesupLamaranUser(Request $request)
    {
        if ($request->hasfile('cv')) {
            $cv = $request->file('cv')->store('storage\app\public\user\cv');
        }
        
        $post = Post::findOrFail('id');
        $company = Company::findOrFail('id');
        $resume = new Resume();
        dd($resume);
        $resume->user_id = auth()->user()->id;
        $resume->company_id = $company->id;
        $resume->post_id = $post->id;
        $resume->description = $request->input('description');
        $resume->nomor_telepon = $request->input('nomor_telepon');
        $resume->save();

        // Resume::create([
        //     'post_id' => $post->id,
        //     // 'cv' => $cv,
        //     'description' => $request->input('description'),
        //     'nomort_telepon' => $request->input('nomor_telepon'),
        // ]);

        return view("pages.dashboardUser", compact("title"))->with('success', 'File uploaded successfully.');
    }

    public function dashboardCompany(Request $request)
    {
        $title = "Dashboard";
        $company = Auth::guard('company')->user();


        // Daftar kolom yang wajib diisi
        $requiredFields = [
            'company_name',
            'company_email',
            'slug',
            'password',
            'address',
            'province',
            'number_phone',
            'category_id'
        ];

        // Cek jika ada kolom yang kosong atau null
        $incompleteProfile = false;
        foreach ($requiredFields as $field) {
            if (!empty($company->$field)) {
                $incompleteProfile = true;
                break;
            }
        }

        $search = $request->query('search_input');
        // Get all resumes sent to the company
        $resumesQuery = $company->resumes()->with('user', 'posts');

// Jika ada input pencarian, tambahkan filter berdasarkan nama user
        if ($search) {
            $resumesQuery->whereHas('user', function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            });
        }

        // Terapkan pagination pada query akhir
        $resumes = $resumesQuery->paginate(5);
        return view('pages.company.DashboardUser', compact('title', 'company', 'resumes', 'company', 'incompleteProfile'));
    }


    public function pasangLowongan(Request $request)
    {
        $title = "Pasang Lowongan Kerja";
        $category = Category::all();

        if ($category == null) {
            $category = [
                'name' => 'Data kosong',
                'id' => null
            ];
        }

        try {
            $response = Http::timeout(10)->get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
            if ($response->successful()) {
                $provinces = $response->json();
            } else {
                $provinces = [];
            }
        } catch (\Exception $e) {
            $message = $e->getMessage();
            return view('exception.error500', compact('message', 'title'));
        }



        return view("pages.company.PasangLowongan", compact("title", "category"));
    }    

    public function updateLoker(Request $request)
    {
        $post = Post::findOrFail($request->id);        

        // $request->validate([
        //     'title' => 'string|max:255',
        //     'content' => 'string|max:255',       
        //     'max_salary' => 'integer',
        //     'min_salary' => 'integer',
        //     'id_category' => 'integer',                        
        // ]);
        $post->title = $request->title;
        $post->min_salary = $request->min_salary;
        $post->max_salary = $request->max_salary;
        $post->id_category = $request->id_category;
        $post->content = $request->content;
        $post->save();
        return redirect()->back()->with('success', 'Lowongan berhasil diupdate.');

    }
    public function pelamarKerja(Request $request)
    {
        $title = "Pelamar Kerja";
        $search = $request->query('search_input');
        $time = $request->input('time');
        $year = $request->input('year');
        
        $resumes = Auth::guard('company')->user()->resumes();
        // Mulai dengan query dasar tanpa memanggil ->latest()
        $resumesQuery = $resumes;

        // Filter berdasarkan pencarian judul
        if ($search) {
            $resumesQuery->whereHas('user', function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
        });

        if ($year) {
            $resumesQuery->whereYear('created_at', $year);
        }

        // Urutkan berdasarkan waktu
        if ($time == 'oldest') {
            $resumesQuery->oldest();
        } elseif ($time == 'latest') {
            $resumesQuery->latest();
        }

        $resumes = $resumesQuery->paginate(5);
    }
        return view("pages.company.PelamarKerjaCompany", compact("title", "resumes"));        
    }    
    public function detailPost(Request $request) {
        $title = "Detail Loker";
        $post = Post::findOrFail($request->route('id'));
        $category = Category::all();      
        return view("pages.company.UbahLoker", compact("title", "post", "category"));
    }
    public function lokerCompany(Request $request){
        $company = Auth::guard('company')->user();
        $title = "Lowongan Kerja";
        $search = $request->query('search_input');
        $time = $request->input('time');
        $year = $request->input('year');

        // Mulai dengan query dasar tanpa memanggil ->latest()
        $postsQuery = $company->posts();

        // Filter berdasarkan pencarian judul
        if ($search) {
            $postsQuery->where('title', 'like', '%' . $search . '%');
        }

        // Filter berdasarkan tahun
        if ($year) {
            $postsQuery->whereYear('created_at', $year);
        }

        // Urutkan berdasarkan waktu
        if ($time == 'oldest') {
            $postsQuery->oldest();
        } elseif ($time == 'latest') {
            $postsQuery->latest();
        }
        $posts = $postsQuery->paginate(5);

        return view("pages.company.LowonganKerjaCompany", compact("title", "posts"));
    }
    public function detailProfileUser(Request $request)
    {
        $title = "Work Seeker";
        $resumes = Resume::findOrFail($request->resumeId);
            $company = Auth::guard('company')->user();
        return view("pages.company.DetailProfileUser", compact("title", "resumes", "company"));
    }

    public function profileCompany(Request $request)
    {
        $title = "Profil Perusahaan";
        $category = Category::all();
        $company = Auth::guard('company')->user();
        if ($category == null) {
            $category = [
                'name' => 'Data kosong',
                'id' => null
            ];
        }
        try {
            $response = Http::timeout(10)->get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
            if ($response->successful()) {
                $provinces = $response->json();
            } else {
                $provinces = [];
            }
        } catch (\Exception $e) {
            $message = $e->getMessage();
            return view('exception.error500', compact('message', 'title'));
        }
        return view("pages.company.ProfileCompany", compact("title", "category", "provinces", "company"));
    }

    public function pasangLoker(Request $request)
    {
        $title = "Pasang Loker";
        return view("pages.PasangLoker", compact("title"));
    }


    public function profilUser(Request $request)
    {
        $title = "Profil";
        $jobcategory = JobCategory::all();

        $selectedProvince = auth()->user()->province;

        try {
            $response = Http::timeout(10)->get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
            if ($response->successful()) {
                $provinces = $response->json();
            } else {
                $provinces = [];
            }
        } catch (\Exception $e) {
            $message = $e->getMessage();
            return view('exception.error500', compact('message', 'title'));
        }
        return view("pages.ProfileUser", compact("title", "jobcategory", "provinces", "selectedProvince"));
    }
    public function aboutUs(Request $request)
    {
        $title = "About Us";
        return view("pages.AboutUs", compact("title"));
    }
    public function landingPage(Request $request)
    {
        $title = "Work Seeker";
        return view("pages.LandingPageUser", compact("title"));
    }
    public function cariLoker(Request $request)
    {
        $title = "Cari Loker";
        $search = $request->query('search_input');
        $province = $request->input('province');

        // Mengambil data provinsi dari API
        try {
            $response = Http::timeout(10)->get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
            if ($response->successful()) {
                $provinces = $response->json();
            } else {
                $provinces = [];
            }
        } catch (\Exception $e) {
            $message = $e->getMessage();
            return view('exception.error500', compact('message', 'title'));
        }

        $postsQuery = Post::query();

        // Menambahkan filter pencarian berdasarkan judul
        if ($search) {
            $postsQuery->where('title', 'like', '%' . $search . '%');
        }

        // Menambahkan filter pencarian berdasarkan provinsi dari company
        if ($province) {
            $postsQuery->whereHas('company', function ($query) use ($province) {
                $query->where('province', 'like', '%' . $province . '%');
            });
        }

        $posts = $postsQuery->paginate(8);

        return view("pages.CariLowonganKerja", compact("title", "provinces", "posts"));
    }

    public function detailPerusahaanUserPage($id_company,  Company $company)
    {
        $nama = Company::find($id_company, 'company_name');
        $title =  $nama->company_name;
        // $id_company = Post::get('id_company');
        // $id_post = Post::get('id');
        $posts = Post::where('id_company', $id_company)->with(['company', 'category']) // Untuk memuat relasi terkait
            ->get();
        $company = Company::find($id_company);
        return view("pages.DetailPerusahaan", compact("title", "posts", "company"));
    }

    public function profilPerusahaanUserPage(Request $request)
    {
        $title = "Profil Perusahaan";
        $response = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
        if ($response->successful()) {
            $provinces = $response->json();
        } else {
            $provinces = [];
        }
        $search = $request->query('search_input');
        $province = $request->input('province');

        $postsQuery = Post::query();
        // Menambahkan filter pencarian berdasarkan judul
        if ($search) {
            $postsQuery->where('title', 'like', '%' . $search . '%');
        }

        // Menambahkan filter pencarian berdasarkan provinsi dari company
        if ($province) {
            $postsQuery->whereHas('company', function ($query) use ($province) {
                $query->where('province', 'like', '%' . $province . '%');
            });
        }

        $companies = Company::inRandomOrder()->paginate(8);
        return view("pages.ProfilPerusahaanUser", compact("title", "provinces", "companies", "postsQuery"));
    }
    public function dashboardUser(Request $request)
    {
        $title = "Work Seeker";
        $response = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
        if ($response->successful()) {
            $provinces = $response->json();
        } else {
            $provinces = [];
        }
        return view("pages.DashboardUser", compact("title", "provinces", 'posts'));
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect('/')->with('status', 'You have been logged out successfully.');
        }

        return redirect('/login')->with('error', 'You are not logged in.');
    }


    public function postLowongan(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'id_category' => 'required|integer',
            'min_salary' => 'required|integer|min:0',
            'max_salary' => 'integer|min:0|gte:min_salary',
        ], [
            'title.required' => 'Judul lowongan harus diisi.',
            'title.max' => 'Judul lowongan maksimal 255 karakter.',
            'content.required' => 'Konten lowongan harus diisi.',
            'id_category.required' => 'Kategori harus dipilih.',
            'id_category.integer' => 'Kategori tidak valid.',
            'min_salary.required' => 'Gaji minimum harus diisi.',
            'min_salary.integer' => 'Gaji minimum harus berupa angka.',
            'min_salary.min' => 'Gaji minimum tidak boleh negatif.',
            'max_salary.required' => 'Gaji maksimum harus diisi.',
            'max_salary.integer' => 'Gaji maksimum harus berupa angka.',
            'max_salary.min' => 'Gaji maksimum tidak boleh negatif.',
            'max_salary.gte' => 'Gaji maksimum harus lebih besar atau sama dengan gaji minimum.',
        ]);

        // Buat slug dari title
        $slug = Str::slug($validatedData['title'], '-');

        // Simpan data yang sudah valid ke database
        $post = new Post();
        $post->title = $validatedData['title'];
        $post->slug = $slug;
        $post->content = $validatedData['content'];
        $post->id_company = auth()->guard('company')->user()->id; // Asumsikan bahwa company yang login akan mengisi kolom ini
        $post->id_category = $validatedData['id_category'];
        $post->min_salary = $validatedData['min_salary'];
        $post->max_salary = $validatedData['max_salary'];
        $post->save();
        return redirect()->route('company.dashboard')->with('success', 'Lowongan berhasil diposting.');
    }


        public function updateCompany(Request $request) {
            $company = Auth::guard('company')->user();
            $customMessages = [                
                'company_name.max' => '*Nama perusahaan tidak boleh lebih dari 255 karakter.',
                'company_name.unique' => '*Nama perusahaan sudah terdaftar.',                
                'company_email.email' => '*Email perusahaan harus berupa alamat email yang valid.',
                'company_email.max' => '*Email perusahaan tidak boleh lebih dari 100 karakter.',
                'company_email.unique' => '*Email perusahaan sudah terdaftar.',                
                'password.min' => '*Password harus minimal 6 karakter.',                                                
                'number_phone.max' => '*Nomor telepon tidak boleh lebih dari 30 karakter.',
                'photo_profile.image' => '*Foto profil harus berupa gambar.',
                'photo_profile.file' => '*Foto profil harus berupa file.',
                'photo_profile.max' => '*Foto profil tidak boleh lebih dari 3 MB.',                
                'photo_banner.image' => '*Foto profil harus berupa gambar.',
                'photo_banner.file' => '*Foto profil harus berupa file.',
                'photo_banner.max' => '*Foto profil tidak boleh lebih dari 3 MB.',                
            ];
            $company_update = Company::findOrFail($company->id);            
             
            $request->validate([
                'company_name' => 'string|max:255|unique:companies,company_name,' . $company_update->id,
                'company_email' => 'string|email|max:100|unique:companies,company_email,' . $company_update->id,       
                'password' => 'string|min:6',
                'address' => 'string',
                'province' => 'string',
                'number_phone' => 'string|max:30',
                'photo_profile.*' => 'image|file|max:3014',        
                'photo_banner.*' => 'image|file|max:10014',        
                'category_id' => 'integer',
                'description' => 'nullable|string',                
            ], $customMessages);
            $company_update->company_name = $request->input('company_name');
            $company_update->company_email = $request->input('company_email');            
            $company_update->address = $request->input('address');
            $company_update->province = $request->input('province');
            $company_update->number_phone = $request->input('number_phone');
            $company_update->code_post = $request->input('code_post');
            $company_update->category_id = $request->input('category_id');
            $company_update->description = $request->input('description');
            if ($request->hasFile('photo_profile')) {
                $company_update->photo_profile = $request->file('photo_profile')->store('company/images/profiles');
            }
            
            if ($request->hasFile('photo_banner')) {
                $company_update->photo_banner = $request->file('photo_banner')->store('company/images/banners');
            }
            $company_update->save();
            return back()->with('success', 'Profil berhasil diperbarui..');

        }

        public function simpanPelamar(Request $request)
        {
            $company = Auth::guard('company')->user();
            $userId = $request->route('id');            
            $bookmark = new CompanyBookmark();
            $bookmark->company_id = $company->id;
            $bookmark->user_id = $userId;
            $bookmark->save();
            return back()->with('success', 'Pelamar ditambahkan ke daftar pelamar..');
        }
        public function hapusPelamar(Request $request)
        {  
            $bookmark = CompanyBookmark::findOrFail($request->route('id'));            
            $bookmark->delete();
            return back()->with('success', 'Pelamar dihapus dari daftar pelamar..');
        }
        public function pdfPreview(Request $request)
        {
            $title = "Preview PDF";
            $resume = Resume::findOrFail($request->route('id'));
            return view("preview.pdf", compact("title", "resume"));
        }
}
