@extends('layouts.DefaultLayout')
@section('main')
<div class="mx-[70px] mt-8">
    <h1 class="text-3xl font-bold">Lowongan Kerja Yang Disimpan</h1>
</div>

<div class="mt-10 grid grid-cols-4 gap-0">
    <div class=" mx-[70px] p-4 bg-white shadow-md rounded-lg">
        <div class="flex items-center mb-4">
            <img src="{{ Vite::asset('resources/assets/contoh.png') }}" alt="Alfamart Logo" class="w-12 h-12 mr-3">
            <div>
                <h2 class="text-md font-semibold">Tukang Parkir</h2>
                <p class="text-gray-500">PT. Alfamart</p>
            </div>
        </div>
        <hr>
        <div class="mb-2 mt-2">
            <p class="text-sm font-semibold text-gray-900">Rp10.000.000 - Rp20.000.000</p>
            <div class="flex items-center text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11V5a1 1 0 10-2 0v2H7a1 1 0 000 2h2v2a1 1 0 002 0V9h2a1 1 0 100-2h-2z" clip-rule="evenodd" />
                </svg>
                Koja, Jakarta Utara, DKI Jakarta
            </div>
        </div>
        <div class="mb-2">
            <h3 class="text-sm font-semibold">Deskripsi Pekerjaan :</h3>
            <p class="text-gray-700 text-sm">Menjadi seorang tukang parkir yang jujur baik dan tidak sombong</p>
        </div>
           <button  data-modal-target="default-modal" data-modal-toggle="default-modal" class="w-full bg-biru-tuwak text-white py-2 rounded-full">Selengkapnya</button>
    </div>
    <div class="max-w-[300px] mx-[70px] p-4 bg-white shadow-md rounded-lg">
        <div class="flex items-center mb-4">
            <img src="{{ Vite::asset('resources/assets/contoh.png') }}" alt="Alfamart Logo" class="w-12 h-12 mr-3">
            <div>
                <h2 class="text-md font-semibold">Tukang Parkir</h2>
                <p class="text-gray-500">PT. Alfamart</p>
            </div>
        </div>
        <hr>
        <div class="mb-2 mt-2">
            <p class="text-sm font-semibold text-gray-900">Rp10.000.000 - Rp20.000.000</p>
            <div class="flex items-center text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11V5a1 1 0 10-2 0v2H7a1 1 0 000 2h2v2a1 1 0 002 0V9h2a1 1 0 100-2h-2z" clip-rule="evenodd" />
                </svg>
                Koja, Jakarta Utara, DKI Jakarta
            </div>
        </div>
        <div class="mb-2">
            <h3 class="text-sm font-semibold">Deskripsi Pekerjaan :</h3>
            <p class="text-gray-700 text-sm">Menjadi seorang tukang parkir yang jujur baik dan tidak sombong</p>
        </div>
           <button  data-modal-target="default-modal" data-modal-toggle="default-modal" class="w-full bg-biru-tuwak text-white py-2 rounded-full">Selengkapnya</button>
    </div>
</div>
@endsection