<?php

namespace App\Http\Controllers\Auth;

use App\Models\Company;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class CompanyAuthController extends Controller
{

    public function login(Request $request){
        $title = "Login Company";
        return view("pages.LoginUser", compact("title"));
    }
    public function register(Request $request){
        $title = "Register Company";
        $response = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
        $category = Category::all();
        if($category == null){
            $category = [
                'name' => 'Data kosong',
                'id' => null
            ];
        }
       
        if ($response->successful()) {
            $provinces = $response->json();
        } else {
            $provinces = [];
        }
        return view("pages.company.RegisterCompany", compact("title", "provinces", "category"));
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->only('company_email', 'password');

        if (Auth::guard('company')->attempt($credentials)) {
            return redirect()->intended('/');
        }

        

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function registerPost(Request $request)
    {        
        $request->validate([
            'company_name' => 'required|string|max:255',
            'company_email' => 'required|string|email|max:100|unique:companies',            
            'password' => 'required|string|min:8',
            'address' => 'required|string',
            'province' => 'required|string',
            'number_phone' => 'required|string|max:30',
            // 'photo_profile' => 'nullable|string|max:255',
            // 'photo_banner' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|string|max:255',            
        ]);
        $slug = "akun-aja-satu";
        $status = "pending";
        $company = Company::create([
            'company_name' => $request->company_name,
            'company_email' => $request->company_email,
            'slug' => $slug,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'province' => $request->province,
            'number_phone' => $request->number_phone,
            'photo_profile' => $request->photo_profile,
            'photo_banner' => $request->photo_banner,
            'description' => "Deskripsi Kosong",
            'category_id' => $request->category_id,
            'status' => $status,
        ]);

        Auth::guard('company')->login($company);

        return redirect()->intended('/login');
    }
}
