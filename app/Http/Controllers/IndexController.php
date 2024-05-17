<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    public function pasangLoker(Request $request){
        $title = "Work Seeker";
        return view("pages.PasangLoker", compact("title"));
    }
    public function profilUser(Request $request){
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
        return view("pages.ProfileUser", compact("title" , "category", "provinces"));
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
        $title = "Work Seeker";
        return view("pages.AboutUs", compact("title"));
    }
    public function landingPage(Request $request){
        $title = "Work Seeker";
        return view("pages.LandingPageUser", compact("title"));
    }
    public function cariLoker(Request $request){
        $title = "Work Seeker";
        $response = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
        if ($response->successful()) {
            $provinces = $response->json();
        } else {
            $provinces = [];
        }
        return view("pages.CariLowonganKerja", compact("title", "provinces"));
    }
    public function dashboardUser(Request $request){
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
