<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $title = "Login Page";
        return view("pages.LoginUser", compact("title"));
    }
    public function register(Request $request)
    {
        $title = "Register Page";
        return view("pages.RegisterUser", compact("title"));
    }

<<<<<<< HEAD
    public function registerPost(Request $request)
    {
        $customMessages = [
            'email.unique' => '*Email sudah terdaftar.',
            'email.required' => '*Email wajib diisi.',
            'email.email' => '*Email harus berupa alamat email yang valid.',
            'username.required' => '*Nama Pengguna wajib diisi.',
            'username.max' => '*Nama Pengguna tidak lebih dari 16 karakter.',
            'username.unique' => '*Nama Pengguna tidak tersedia.',
            'password.required' => '*Kata Sandi wajib diisi.',
            'password.min' => '*Kata Sandi harus minimal 6 karakter.',
            'password.confirmed' => '*Kata Sandi dan Konfirmasi Kata Sandi tidak cocok',
            'password_confirmation.required' => '*Konfirmasi Kata Sandi wajib diisi.',
            'password_confirmation.min' => '*Konfirmasi Kata Sandi harus minimal 6 karakter.',
        ];

        $request->validate([
            'email' => ['required', 'email:dns', 'unique:users'], //email:dns checking must be online, otherwise it will fail
            'username' => ['required', 'string', 'max:16', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:6'],
        ], $customMessages);
        $status = "pending";
        User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'status' => $status
        ]);

        session()->flash('success', 'Registrasi berhasil! Silahan login.');
        return redirect()->route('login');
    }

    public function loginPost(Request $request)
    {
        $customMessages = [
            'email.required' => '*Email wajib diisi.',
            'email.email' => '*Email harus berupa alamat email yang valid.',
            'password.required' => '*Password wajib diisi.',
            'password.min' => '*Password harus minimal 6 karakter.',
        ];
        $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required', 'string', 'min:6'],
        ], $customMessages);

        $credentials = $request->only('email', 'password');

        // dd($credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('error', 'Email atau password tidak ada.');
    }


    public function registerCompany(Request $request)
    {
        $title = "Register Company Page";
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

        return view("pages.RegisterCompany", compact("title", "category", "provinces"));
    }
=======
        

>>>>>>> 60da29063bc03d405bfad310292ed43f07964ca3
}

