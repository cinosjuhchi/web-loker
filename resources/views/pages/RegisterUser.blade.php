@extends('layouts.GuestLayout')
@section('registerUser')
    <div class="flex h-screen">
        <div class="lg:block min-[300px]:hidden relative h-screen">
            <img src="{{ Vite::asset('resources/assets/regis.svg') }}" alt="" class="bg-cover h-screen object-cover"
                width="100%">
        </div>
        <div class="mx-auto flex justify-center items-center min-[300px]:p-5 ">
            <div class="font-inter">
                <div class="flex items-center">
                    <img class="h-14" src="{{ Vite::asset('resources/assets/logo/logo_outline_text_none.png') }}"
                        alt="image description">
                    <h2 class="text-5xl font-bold text-blue-700 font-JakartaSans">Work<span
                            class="text-yellow-300">Seeker</span></h2>
                </div>
                <h1 class="font-bold text-3xl">Daftarkan dirimu sekarang!</h1>
                <p class="text-xl mt-2">Bergabung dengan kami dan dapatkan pekerjaan yang kamu inginkan</p>

                <div class="mt-5">
                    <form action="{{ route('user.register.post') }}" method="post">
                        @csrf
                        <div>
                            <label for="email" class="text-lg font-semibold">Alamat Email</label>
                            <div>
                                <input id="email" type="email" name="email" placeholder="contoh@gmail.com" required value="{{ old('email') }}"
                                    class="py-4 px-5 w-full rounded-md mt-3 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10
                                    @error('email')  invalid:border-red-500 invalid:text-red-600
                                    focus:invalid:border-red-500 focus:invalid:ring-red-500 @enderror">
                            </div>
                            @error('email')
                                <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-[30px]">
                            <label for="username" class="text-lg font-semibold">Nama Pengguna</label>
                            <div>
                                <input id="username" name="username" type="text" placeholder="John Doe" required value="{{ old('username') }}"
                                    class="py-4 px-5 w-full rounded-md mt-3 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10
                                    @error('username')  invalid:border-red-500 invalid:text-red-600
                                    focus:invalid:border-red-500 focus:invalid:ring-red-500 @enderror">
                            </div>
                            @error('username')
                                <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-[30px]">
                            <label for="password" class="text-lg font-semibold">Kata Sandi</label>
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
                        <div class="mt-[30px]">
                            <label for="confirm-password" class="text-lg font-semibold">Konfirmasi Kata Sandi</label>
                            <div>
                                <input id="confirm-password" name="password_confirmation" type="password" required
                                    placeholder="Konfirmasi Password Anda"
                                    class="py-4 px-5 w-full rounded-md mt-3 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10 
                                    @error('password_confirmation')  invalid:border-red-500 invalid:text-red-600
                                    focus:invalid:border-red-500 focus:invalid:ring-red-500 @enderror">
                            </div>
                            @error('password_confirmation')
                                <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <button class="mt-10 py-4 w-full rounded-3xl text-white font-semibold" style="background: #003974"
                            type="submit">Daftar</button>
                    </form>
                    <p class="text-sm text-center mt-2">Sudah punya akun? <a href="/login" style="color: #003974">Masuk</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
