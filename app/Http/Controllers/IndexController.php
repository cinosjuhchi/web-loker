<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{

    public function uploadLamaranUser(Request $request){
        $title = "Upload Lamaran";
        return view("pages.UploadLamaranUser", compact("title"));
    }
   

    public function pasangLoker(Request $request)
    {

        $title = "Pasang Loker";
        return view("pages.PasangLoker", compact("title"));
    }
    public function profilUser(Request $request)
    {
        $title = "Profil";

        $category = Category::all();
        if ($category == null) {
            $category = [
                'name' => 'Data kosong',
                'id' => null
            ];
        }

        $response = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');


        if ($response->successful()) {
            $provinces = $response->json();
        } else {
            $provinces = [];
        }
        return view("pages.ProfileUser", compact("title", "category", "provinces"));
    }

    public function disimpanUser(Request $request){
        $title = "Profil";

        $category = Category::all();
        if ($category == null) {
            $category = [
                'name' => 'Data kosong',
                'id' => null
            ];
        }

        $response = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');


        if ($response->successful()) {
            $provinces = $response->json();
        } else {
            $provinces = [];
        }
        return view("pages.DisimpanUser", compact("title" , "category", "provinces"));
    }

    public function profilPerusahaanUserPage(Request $request){
        $title = "Profil";

        $category = Category::all();
        if ($category == null) {
            $category = [
                'name' => 'Data kosong',
                'id' => null
            ];
        }

        $response = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');


        if ($response->successful()) {
            $provinces = $response->json();
        } else {
            $provinces = [];
        }
        return view("pages.ProfilPerusahaanUser", compact("title" , "category", "provinces"));
    }

    public function detailPerusahaanUserPage(Request $request){
        $title = "Work Seeker";

        $category = Category::all();
        if ($category == null) {
            $category = [
                'name' => 'Data kosong',
                'id' => null
            ];
        }

        $response = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');


        if ($response->successful()) {
            $provinces = $response->json();
        } else {
            $provinces = [];
        }
        return view("pages.DetailPerusahaan", compact("title" , "category", "provinces"));
    }

    public function aboutUs(Request $request){
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
        $response = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
        $provinces = $response->successful() ? $response->json() : [];

        $postsQuery = Post::with('category');

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
    public function dashboardUser(Request $request)
    {
        $title = "Work Seeker";
        $response = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
        if ($response->successful()) {
            $provinces = $response->json();
        } else {
            $provinces = [];
        }
        return view("pages.DashboardUser", compact("title", "provinces"));
    }
}
