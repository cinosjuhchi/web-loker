<?php

namespace App\Http\Controllers\Auth;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CompanyAuthController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('company')->attempt($credentials)) {
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'company_email' => 'required|string|email|max:100|unique:companies',
            'slug' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'address' => 'required|string',
            'number_phone' => 'required|string|max:30',
            'photo_profile' => 'nullable|string|max:255',
            'photo_banner' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|string|max:255',
            'status' => 'required|in:active,pending,suspend',
        ]);

        $company = Company::create([
            'company_name' => $request->company_name,
            'company_email' => $request->company_email,
            'slug' => $request->slug,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'number_phone' => $request->number_phone,
            'photo_profile' => $request->photo_profile,
            'photo_banner' => $request->photo_banner,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'status' => $request->status,
        ]);

        Auth::guard('company')->login($company);

        return redirect()->route('company.home');
    }
}
