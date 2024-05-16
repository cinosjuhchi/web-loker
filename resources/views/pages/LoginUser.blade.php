@extends('layouts.GuestLayout')

{{-- tolong rapihin alertnya  --}}
@if (@session()->has('success'))
    <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
        role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="currentColor" viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Info</span>
        <div>
            {{ session('success') }}
        </div>
    </div>
@endif
@if (@session()->has('error'))
    <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
        role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="currentColor" viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Info</span>
        <div>
            {{ session('error') }}
        </div>
    </div>
@endif

@section('loginUser')
    <div class="flex h-screen">
        <div class="lg:block min-[300px]:hidden relative h-screen">
            <img src="{{ Vite::asset('resources/assets/login.svg') }}" alt="" class="bg-cover h-screen object-cover"
                width="100%">
        </div>
        <div class="h-screen mx-auto flex justify-center items-center min-[300px]:p-5">
            <div class="font-inter">
                <div class="flex items-center">
                    <img class="h-14" src="{{ Vite::asset('resources/assets/logo/logo_outline_text_none.png') }}"
                        alt="image description">
                    <h2 class="text-5xl font-bold text-blue-700 font-JakartaSans">Work<span
                            class="text-yellow-300">Seeker</span></h2>
                </div>
                <h1 class="font-bold text-3xl">Selamat datang kembali 👋</h1>
                <p class="text-xl mt-2">Bergabung dengan kami dan dapatkan pekerjaan yang kamu inginkan</p>

                <div class="mt-5">
                    <form action="{{ route('login.user.post') }}" method="post">
                        @csrf
                        <div>
                            <label for="email" class="text-lg font-semibold">Alamat Email</label>
                            <div>
                                <input id="email" name="email" type="email" placeholder="example@gmail.com"
                                    autofocus value="{{ old('email') }}" required
                                    class="py-4 px-5 w-full rounded-md mt-3 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10 @error('email') invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500 @enderror">
                            </div>
                            @error('email')
                                <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-[30px]">
                            <label for="password" class="text-lg font-semibold">Password</label>
                            <div>
                                <input id="password" name="password" type="password" placeholder="Minimal 6 karakter"
                                    required
                                    class="py-4 px-5 w-full rounded-md mt-3 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10 
                                    @error('password')  invalid:border-red-500 invalid:text-red-600
                                    focus:invalid:border-red-500 focus:invalid:ring-red-500 @enderror">
                            </div>
                            @error('password')
                                <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <button class="mt-10 py-4 w-full rounded-3xl text-white font-semibold" style="background: #003974"
                            type="submit">Masuk</button>
                    </form>
                    <p class="text-sm text-center mt-2">Belum punya akun? <a href="/register"
                            style="color: #003974">Daftar</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
