@extends('layouts.DefaultLayout')
@section('cardLowongan')

<div class="max-w-sm mx-auto p-4 bg-white shadow-md rounded-lg">
    <div class="flex items-center mb-4">
        <img src="https://via.placeholder.com/50x50.png?text=Alfamart" alt="Alfamart Logo" class="w-12 h-12 mr-3">
        <div>
            <h2 class="text-lg font-semibold">Tukang Parkir</h2>
            <p class="text-gray-500">PT. Alfamart</p>
        </div>
    </div>
    <div class="mb-4">
        <p class="text-xl font-semibold text-gray-900">Rp10.000.000 - Rp20.000.000</p>
        <div class="flex items-center text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11V5a1 1 0 10-2 0v2H7a1 1 0 000 2h2v2a1 1 0 002 0V9h2a1 1 0 100-2h-2z" clip-rule="evenodd" />
            </svg>
            Koja, Jakarta Utara, DKI Jakarta
        </div>
    </div>
    <div class="mb-4">
        <h3 class="text-md font-semibold">Deskripsi Pekerjaan :</h3>
        <p class="text-gray-700">Menjadi seorang tukang parkir yang jujur baik dan tidak sombong</p>
    </div>
    <button class="w-full bg-blue-600 text-white py-2 rounded-lg">Selengkapnya</button>
</div>

@endsection