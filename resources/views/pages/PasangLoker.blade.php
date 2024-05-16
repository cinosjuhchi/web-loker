@extends('layouts.GuestLayout')
@section('pasangLoker')
<nav>
    @include('components.NavbarUser')
</nav>

<div class="lg:m-20 lg:flex flex-wrap m-4">
    <div class="lg:w-3/5 lg:mt-28 w-full mt-24 text-center lg:text-left">
        <h1 class="font-semibold text-2xl lg:text-4xl lg:w-2/3 mx-auto lg:mx-0">Rekrut <span class="underline underline-offset-4 text-biru-tuwak">pekerja terbaik</span> untuk kesuksesan perusahaan Anda. <span class="underline underline-offset-4 text-biru-tuwak">Cepat dan efektif.</span></h1>
        <a href="#"><button class="mt-5 lg:mt-10 mx-auto lg:mx-0 rounded-full bg-biru-tuwak py-2 px-5 text-white font-semibold">Pasang Lowongan</button></a>
    </div>
    <div class="lg:w-2/5 hidden lg:block">
        <img src="{{ Vite::asset('resources/assets/pasangloker1.svg') }}" alt="" class="h-96 mx-auto">
    </div>
</div>

<div class="mt-24 lg:mx-20 mx-4">
    <h1 class="font-semibold text-2xl lg:text-4xl text-center">Hanya dengan 3 langkah sederhana</h1>
    <div class="mt-10 grid grid-cols-1 lg:grid-cols-3 gap-4">
        <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-biru-tuwak dark:text-white">1</h5>
            <img src="{{ Vite::asset('resources/assets/pasangloker2.svg') }}" alt="">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Buat akun baru</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Anda hanya perlu melengkapi informasi perusahaan anda dan informasi akun anda</p>
        </div>
        <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-biru-tuwak dark:text-white">2</h5>
            <img src="{{ Vite::asset('resources/assets/pasangloker3.svg') }}" alt="">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Lengkapi Informasi Profile</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Kemudian pembuatan akun anda harus mengisi dengan detail terkait perusahaan anda</p>
        </div>
        <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-biru-tuwak dark:text-white">3</h5>
            <img src="{{ Vite::asset('resources/assets/pasangloker4.svg') }}" alt="">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Pasang Lowongan Anda</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Setelah itu, anda dapat mengisi judul, deskripsi, dan lokasi ke pemasangan lowongan anda. Selamat lowongan anda sudah siap</p>
        </div>
    </div>
</div>

<div class="w-full mt-24  block lg:hidden">
    <div class="hidden lg:block w-1/2">
        <img src="{{ Vite::asset('resources/assets/pasangloker5.svg') }}" alt="" class="w-full object-cover">
    </div>
    <div class="bg-LightBlue w-full lg:w-1/2">
        <div class="lg:ml-10 p-10">
            <div class="flex space-x-4 justify-center mt-10">
                <img src="{{ Vite::asset('resources/assets/Star 1.svg') }}" alt="">
                <img src="{{ Vite::asset('resources/assets/Star 1.svg') }}" alt="">
                <img src="{{ Vite::asset('resources/assets/Star 1.svg') }}" alt="">
                <img src="{{ Vite::asset('resources/assets/Star 1.svg') }}" alt="">
                <img src="{{ Vite::asset('resources/assets/Star 1.svg') }}" alt="">
            </div>
            <div class="mt-5 text-center lg:text-left">
                <h1 class="text-gray-900 font-semibold text-2xl lg:text-4xl lg:w-2/3 mx-auto lg:mx-0">Rekrutmen jadi lebih efisien dengan WorkSeeker. Cepat dan mudah digunakan!</h1>
              
            </div>
        </div>
    </div>
</div>

<div class="my-20 text-center">
    <h1 class="text-gray-900 font-semibold text-2xl lg:text-4xl lg:w-2/3 mx-auto">Pasangkan lowongan pekerjaanmu <span class="underline underline-offset-4 text-biru-tuwak">Sekarang!</span></h1>
    <a href="#"><button class="mt-5 lg:mt-10 rounded-full bg-biru-tuwak py-2 px-5 text-white font-semibold">Pasang Lowongan</button></a>
</div>

<footer>
    @include('components.FooterUser')
</footer>
@endsection
