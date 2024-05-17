@extends('layouts.DefaultLayout')
@section('main')
<div class=" mx-[70px]">
    <h1 class="mt-10 font-semibold text-3xl">Selamat datang @perusahaan</h1>
    <h1 class="mt-2 font-medium text-base">Cari pekerja yang anda inginkan sekarang!</h1>
</div>

<div class="flex justify-center">
    <button type="button" class="text-white bg-biru-tuwak hover:bg-biru-baru focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-lg px-7 py-3 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Pasang Lowongan Pekerjaan</button>
</div>
<div class="flex justify-center">
    <h1 class="font-semibold text-lg mt-3">Anda belum melengkapi Profile anda</h1>
</div>

<div class="flex justify-center">
    <a href="#" class="text-biru-tuwak underline font-semibold text-lg mt-2">Lengkapi Profile</a>
</div>

<div class="flex justify-center mt-10 mb-10">
    <hr class="w-[1200px] ">
</div>

<div class="mx-[70px] flex">
    <h1 class="font-semibold text-2xl mt-1 mr-[550px]">Daftar Pelamar</h1>
    <div>
        <form class="flex items-center ">   
                <input type="text" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 ps-4 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari pelamar" required />
                <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-4">
                </button>
            </div>
            <button type="submit" class="inline-flex items-center py-0 px-8 ms-2 text-sm font-medium text-white bg-biru-tuwak rounded-lg border border-blue-700 hover:bg-biru-baru focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari
            </button>
        </form>
    </div>
</div>

{{-- Tableee --}}
<div class="mb-60">

</div>

{{-- riwayat lowongan --}}
<div class="mx-[70px] flex">
    <h1 class="text-3xl font-semibold mr-[630px]">Riwayat Lowongan Kerja Sebelumnya </h1>
    <svg class=" mt-1 w-10 h-10 text-biru-tuwak dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 12H5m14 0-4 4m4-4-4-4"/>
      </svg>
</div>

{{-- card lowongan --}}
<div class="card">

</div>


@endsection