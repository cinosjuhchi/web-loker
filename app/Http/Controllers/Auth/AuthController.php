<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Storage;


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
        return redirect()->route('user.login');
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
            return redirect()->intended('/dashboard-user');
        }
        return back()->with('error', 'Email atau password tidak ada.');
    }

    public function updateUser(Request $request)
    {
        $user = Auth::user();

        // Validasi
        $request->validate([
            'file_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5124',
            'file-PP' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5124',
            'file-CV' => 'nullable|PDF|mimes:pdf|max:5124',
            'description' => 'nullable|string|max:255',
            'nama_pengguna' => 'nullable|string|max:255',
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'number_phone' => 'nullable|string|max:15',
            'datebirth' => 'nullable|date',
            'academy' => 'nullable|string',
            'jk' => 'nullable|string',
            'province' => 'nullable|string',
        ]);

        // Simpan banner
        if ($request->hasFile('file_banner')) {
            $user->photo_banner = $request->file('file_banner')->store('user/images/banners');
        }

        // Simpan foto profil
        if ($request->hasFile('file-PP')) {
            $user->photo = $request->file('file-PP')->store('user\images\profiles');
        }
        if ($request->hasFile('file-cv')) {
            $user->default_cv = $request->file('file-cv')->store('user\cv');
        }

        $user->description = $request->input('description');
        $user->username = $request->input('nama_pengguna');
        $user->name = $request->input('nama');
        $user->email = $request->input('email');
        $user->number_phone = $request->input('nomor_telepon');
        $user->datebirth = $request->input('datebirth');
        $user->academy = $request->input('academy');
        $user->jk = $request->input('jk');
        $user->province = $request->input('province');
        $user->interest = $request->input('interest', []);

        /** @var \App\Models\User $user **/
        // Simpan data
        $user->save();
        // dd($user);
        return redirect()->route('puu')->with('success', 'Profil berhasil diperbarui.');
    }

    private function getProvincesFromAPI()
    {
        // Contoh pemanggilan API (sesuaikan dengan API yang Anda gunakan)
        $response = Http::get('https://api.example.com/provinces');
        return $response->json();
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

        return view("pages.RegisterCompany", compact("title", "category", "provinces"));
    }
}
