<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Category;

class AuthController extends Controller
{
    public function login(Request $request){
        $title = "Login Page";
        return view("pages.LoginUser", compact("title"));
    }
    public function register(Request $request){
        $title = "Register Page";
        return view("pages.RegisterUser", compact("title"));
    }

    public function registerCompany(Request $request){
        $title = "Register Company Page";
        $category = Category::all();
        if($category == null){
            $category = [
                'name' => 'Data kosong',
                'id' => null
            ];
        }

        $response = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
        
        // Memeriksa apakah request berhasil
        if ($response->successful()) {
            $provinces = $response->json();
        } else {
            $provinces = [];
        }

        return view("pages.RegisterCompany", compact("title", "category", "provinces"));
    }

}
