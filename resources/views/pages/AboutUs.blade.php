@extends('layouts.GuestLayout')
@section('aboutUs')
<nav>
    @include('components.NavbarUser')
</nav>

<div class="lg:mx-[70px] mx-4 flex lg:mt-24 mt-10 flex-wrap">
    <div class="lg:w-1/2 w-full my-auto">
        <h1 class="font-bold text-3xl lg:text-5xl">Mengenal WorkSeeker</h1>
        <p class="mt-5 text-md lg:text-2xl">WorkSeeker adalah platform yang menghubungkan pencari kerja dengan perusahaan. Pencari kerja dapat menemukan lowongan, membuat profil, dan menerima pemberitahuan, sementara perusahaan dapat memposting lowongan dan mencari kandidat.</p>
    </div>
    <div class="lg:w-1/2 w-full hidden lg:block">
        <img src="{{ Vite::asset('resources/assets/Rectangle 26.svg') }}" alt="" class="h-auto mx-auto">
    </div>
</div>

<div class="mx-4 lg:mt-24 mt-10">
    <h1 class="font-bold text-3xl lg:text-5xl text-center">Mengapa anda harus memilih WorkSeeker?</h1>
    <div class="w-full flex justify-center mt-5">
        <img src="{{ Vite::asset('resources/assets/gambar 2.svg') }}" alt="" class="lg:w-4/5 w-full">
    </div>
</div>

<div class="lg:mt-28 mt-10 mx-4">
    <div class="flex flex-wrap justify-center gap-10">
        <div class="lg:w-[600px] w-full p-5 bg-blue-300 border rounded-lg mb-2">
            <img src="{{ Vite::asset('resources/assets/satu.svg') }}" alt="" class="flex mx-auto">
            <p class="font-semibold text-center mt-5 text-xl lg:text-2xl">WorkSeeker menyediakan berbagai macam lowongan pekerjaan dari berbagai industri dan tingkat pengalaman.</p>
        </div>
        <div class="lg:w-[600px] w-full p-5 bg-blue-300 border rounded-lg mb-2">
            <img src="{{ Vite::asset('resources/assets/dua.svg') }}" alt="" class="flex mx-auto">
            <p class="font-semibold text-center mt-5 text-xl lg:text-2xl">WorkSeeker memiliki fitur pencarian yang canggih, memungkinkan Anda untuk memfilter lowongan berdasarkan lokasi, industri, gaji, dll.</p>
        </div>
    </div>
    <div class="flex flex-wrap justify-center gap-10 mt-10 lg:mt-[60px]">
        <div class="lg:w-[600px] w-full p-5 bg-blue-300 border rounded-lg mb-2">
            <img src="{{ Vite::asset('resources/assets/tiga.svg') }}" alt="" class="flex mx-auto">
            <p class="font-semibold text-center mt-5 text-xl lg:text-2xl">Anda dapat membuat profil profesional yang lengkap dan menarik di WorkSeeker.</p>
        </div>
        <div class="lg:w-[600px] w-full p-5 bg-blue-300 border rounded-lg mb-2">
            <img src="{{ Vite::asset('resources/assets/empat.svg') }}" alt="" class="flex mx-auto">
            <p class="font-semibold text-center mt-5 text-xl lg:text-2xl">Dengan WorkSeeker, proses melamar pekerjaan menjadi lebih mudah dan cepat.</p>
        </div>
    </div>
</div>

<div class="flex justify-center relative mt-20">
    <img class="w-full h-full object-cover" src="{{ Vite::asset('resources/assets/Rectangle86.png')}}" alt="image description">
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
        <h1 class="font-semibold text-xl lg:text-4xl hidden lg:block">#WorkSeeker</h1>
        <h1 class="font-semibold text-xl lg:text-4xl mt-4 hidden lg:block">Temukan Pekerjaan, <br/> Capai Impian!</h1>
        <div class="flex lg:mt-8 mt-4 space-x-4">
            <a href="/register" class="bg-biru-tuwak hover:bg-blue-300 text-white font-medium rounded-3xl text-sm px-9 py-2.5">Daftar</a>
            <a href="/login" class="border border-white hover:bg-black text-white font-medium rounded-3xl text-sm px-9 py-2">Masuk</a>
        </div>
    </div>
</div>

<footer>
    @include('components.FooterUser')
</footer>
@endsection
