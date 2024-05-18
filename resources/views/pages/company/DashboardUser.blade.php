@extends('layouts.DefaultLayout')
@section('dashboardCompany')
    <div class=" lg:mx-[70px] mx-[15px]">
        <h1 class="mt-10 font-semibold text-3xl">Selamat datang @perusahaan</h1>
        <h1 class="mt-2 font-medium text-base">Cari pekerja yang anda inginkan sekarang!</h1>
    </div>

    <div class="flex justify-center">
        <a href="/pasang-lowongan">
            <button type="button"
            class="mt-4 text-white bg-biru-tuwak hover:bg-biru-baru focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-lg px-7 py-3 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Pasang
            Lowongan Pekerjaan</button>
        </a>
       
    </div>
    <div class="flex justify-center">
        <h1 class="font-semibold text-lg mt-3">Anda belum melengkapi Profile anda</h1>
    </div>

    <div class="flex justify-center">
        <a href="/profil-perusahaan" class="text-biru-tuwak underline font-semibold text-lg mt-2">Lengkapi Profile</a>
    </div>

    <div class="flex justify-center mt-10 mb-10">
        <hr class="lg:w-[1200px] w-full ">
    </div>

    <div class="lg:mx-[70px] mx-[15px] lg:flex">
        <h1 class="font-semibold text-2xl mt-1 lg:mr-[750px] text-center lg:text-start">Daftar Pelamar</h1>
        <div>
            <form class="lg:flex block items-center ">


                <input type="text" id="voice-search"
                    class="bg-gray-50 border mb-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block lg:w-[200px] ps-4 p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-full "
                    placeholder="Cari Pelamar" required />

                <button type="submit"
                    class=" px-9 py-2 lg:mx-4 text-sm font-medium mb-2 text-white bg-biru-tuwak rounded-lg border border-blue-700 hover:bg-biru-baru focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-full">Cari
                </button>

            </form>
        </div>
    </div>

    {{-- Tableee --}}
    <div class="mb-60">

    </div>

    {{-- riwayat lowongan --}}
    <div class="lg:mx-[70px] mx-[15px] flex">
        <h1 class="text-3xl font-semibold lg:mr-[630px]">Riwayat Lowongan Kerja Sebelumnya </h1>
        <a href="/loker-company">
            <svg class=" mt-1 w-10 h-10 text-biru-tuwak dark:text-white" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M19 12H5m14 0-4 4m4-4-4-4" />
            </svg>
        </a>

    </div>

    {{-- card lowongan --}}
    <div class="card">

    </div>
@endsection
