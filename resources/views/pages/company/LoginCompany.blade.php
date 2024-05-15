@extends('layouts.GuestLayout')
@section('loginUser')
    <div class="flex h-screen">
        <div class="lg:block min-[300px]:hidden  relative h-screen">
            <img src="{{ Vite::asset('resources/assets/login.svg') }}" alt="" class="bg-cover h-screen object-cover" width="100%" >
        </div>
        <div class="h-screen mx-auto flex justify-center items-center min-[300px]:p-5">
            <div class="font-inter">
                <div class="flex items-center">
                    <img class="h-24 max-w-xl" src="{{ Vite::asset("resources/assets/logo/logo_outline_text_none.png") }}" alt="image description">
                    <h2 class="text-5xl font-bold text-blue-700 font-JakartaSans">Work<span class="text-yellow-300">Seeker</span></h2>
                </div>
                <h1 class="font-bold text-3xl">Selamat datang kembali 👋</h1>
                <p class="text-xl mt-2">Bergabung dengan kami dan dapatkan pekerjaan yang kamu inginkan</p>

                <div class="mt-5">
                    <form action="{{ route('company.login.post') }}" method="POST" enctype="application/x-www-form-urlencoded">
                        @csrf
                        <div>
                            <label for="" class="text-lg font-semibold">Alamat Email</label>
                            <div>
                                <input type="text" name="company_email" placeholder="example@gmail.com" class="py-4 px-5 w-full rounded-md mt-3 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10" >
                                @error('company_email')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-[30px]">
                            <label for="" class="text-lg font-semibold">Password</label>
                            <div>
                                <input type="password" name="password" placeholder="Minimal 6 karakter" class="py-4 px-5 w-full rounded-md mt-3 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10" >
                                @error('password')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="mt-10 py-4 w-full rounded-3xl text-white font-semibold" style="background: #003974" type="submit">Masuk</button>
                    </form>
                    <p class="text-sm text-center mt-2">Belum punya akun? <a href="{{ route('company.register') }}" style="color: #003974">Daftar</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection