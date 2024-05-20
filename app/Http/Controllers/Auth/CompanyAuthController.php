<?php

namespace App\Http\Controllers\Auth;

use App\Models\Company;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class CompanyAuthController extends Controller
{

    public function login(Request $request){
        $title = "Login Company";
        return view("pages.company.LoginCompany", compact("title"));
    }
    public function register(Request $request){
        $title = "Register Company";        
        $category = Category::all();
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
                $message = $e->getMessage();
                return view('exception.error500', compact('message', 'title'));
            }
        return view("pages.company.RegisterCompany", compact("title", "provinces", "category"));
    }

    public function loginPost(Request $request)
    {
        $customMessages = [            
            'company_email.required' => '*Email perusahaan wajib diisi.',
            'company_email.email' => '*Email harus berupa alamat email yang valid.',
            'company_email.max' => '*Email perusahaan tidak boleh lebih dari 100 karakter.',            
            'password.required' => '*Password wajib diisi.',
            'password.min' => '*Password harus minimal 6 karakter.',            
        ];

        $request->validate([
            'company_email' => "required|email|string|max:255",
            'password' => "required|min:6",
        ], $customMessages);

        $credentials = $request->only('company_email', 'password');
        

        if (Auth::guard('company')->attempt($credentials)) {
            return redirect()->intended('/after-login');
        }

        

        return back()->withErrors([
            'company_email' => 'Email atau password tidak ada.',
        ])->withInput($request->except('password'));
    }


    public function logout(Request $request)
    {
        
    if (Auth::check()) {
        Auth::logout();
        return redirect('/')->with('status', 'You have been logged out successfully.');
    }

    return redirect()->route('company.login')->with('error', 'You are not logged in.');
    }

    public function registerPost(Request $request)
    {                

        $customMessages = [
            'company_name.required' => '*Nama perusahaan wajib diisi.',
            'company_name.max' => '*Nama perusahaan tidak boleh lebih dari 255 karakter.',
            'company_name.unique' => '*Nama perusahaan sudah terdaftar.',
            'company_email.required' => '*Email perusahaan wajib diisi.',
            'company_email.email' => '*Email perusahaan harus berupa alamat email yang valid.',
            'company_email.max' => '*Email perusahaan tidak boleh lebih dari 100 karakter.',
            'company_email.unique' => '*Email perusahaan sudah terdaftar.',
            'password.required' => '*Password wajib diisi.',
            'password.min' => '*Password harus minimal 6 karakter.',
            'address.required' => '*Alamat wajib diisi.',
            'province.required' => '*Provinsi wajib diisi.',
            'number_phone.required' => '*Nomor telepon wajib diisi.',
            'number_phone.max' => '*Nomor telepon tidak boleh lebih dari 30 karakter.',
            'photo_profile.image' => '*Foto profil harus berupa gambar.',
            'photo_profile.file' => '*Foto profil harus berupa file.',
            'photo_profile.max' => '*Foto profil tidak boleh lebih dari 3 MB.',
            'category_id.required' => '*Bidang perusahaan wajib dipilih.',
        ];
         
        $request->validate([
            'company_name' => 'required|string|max:255|unique:companies',
            'company_email' => 'required|string|email:dns|max:100|unique:companies',            
            'password' => 'required|string|min:6',
            'address' => 'required|string',
            'province' => 'required|string',
            'number_phone' => 'required|string|max:30',
            'photo_profile.*' => 'image|file|max:3014',        
            'description' => 'nullable|string',
            'category_id' => 'required',            
        ], $customMessages);
        $image = $request->photo_profile->store("company/images/profiles");        
        $slug = Str::slug($request->company_name) . '-' . Str::random(5);
        $status = "active";
        $company = Company::create([
            'company_name' => $request->company_name,
            'company_email' => $request->company_email,
            'slug' => $slug,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'province' => $request->province,
            'number_phone' => $request->number_phone,
            'photo_profile' => $image,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'status' => $status,
        ]);

        

        return redirect()->route('company.login');
    }
}
