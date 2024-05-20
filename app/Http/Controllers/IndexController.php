<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Resume;
use App\Models\Category;
use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    public function uploadLamaranUser(Request $request)
    {
        $title = "Upload Lamaran";
        return view("pages.UploadLamaranUser", compact("title"));
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


        // Get all resumes sent to the company
        $resumes = $company->resumes()->with('user', 'posts')->paginate(5); // Ambil semua resume yang terkait dengan perusahaan yang login         
        return view('pages.company.DashboardUser', compact('title', 'company', 'resumes', 'company', 'incompleteProfile'));
    }

    public function pasangLowongan(Request $request){
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
                return response()->json([
                    'message' => 'Error jaringan: ' . $e->getMessage()
                ], 500);
            }



        return view("pages.company.PasangLowongan", compact("title", "category"));        

    }
    public function ubahLoker(Request $request)
    {
        $title = "Ubah Loker";
        return view("pages.company.UbahLoker", compact("title"));
    }
    public function pelamarKerja(Request $request)
    {
        $title = "Pelamar Kerja";
        $resumes = Auth::guard('company')->user()->resumes()->latest()->paginate(5);
        return view("pages.company.PelamarKerjaCompany", compact("title", "resumes"));        
    }    
    public function lokerCompany(Request $request){
        $title = "Lowongan Kerja";
        $company = Auth::guard('company')->user();
        $posts = $company->posts()->latest()->paginate(5);        
        return view("pages.company.LowonganKerjaCompany", compact("title", "posts"));
    }
        public function detailProfileUser(Request $request){
            $title = "Work Seeker";
            $resumes = Resume::findOrFail($request->resumeId);
            return view("pages.company.DetailProfileUser", compact("title", "resumes"));
        }
       
    public function profileCompany(Request $request) {
        $title = "Profil Perusahaan";
        $category = Category::all();
        $company = Auth::guard('company')->user();
        if($category == null){
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
            return response()->json([
                'message' => 'Error jaringan: ' . $e->getMessage()
            ], 500);
        }
        return view("pages.company.ProfileCompany", compact("title", "category", "provinces", "company"));
    }

    public function pasangLoker(Request $request){
        $title = "Pasang Loker";
        return view("pages.PasangLoker", compact("title"));
    }

    
    public function profilUser(Request $request){
        $title = "Profil";

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
                return response()->json([
                    'message' => 'Error jaringan: ' . $e->getMessage()
                ], 500);
            }
        return view("pages.ProfileUser", compact("title" , "category", "provinces"));
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
                return response()->json([
                    'message' => 'Error jaringan: ' . $e->getMessage()
                ], 500);
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

        $posts = $postsQuery->get();

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

        $companies = Company::inRandomOrder()->get();
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
        return view("pages.DashboardUser", compact("title", "provinces",));
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect('/')->with('status', 'You have been logged out successfully.');
        }

        return redirect('/login')->with('error', 'You are not logged in.');
    }


    public function postLowongan(Request $request) {
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
}

