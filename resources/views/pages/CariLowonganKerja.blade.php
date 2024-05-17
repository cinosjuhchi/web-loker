@extends('layouts.DefaultLayout')
@section('main')
<div class="lg:mx-[70px] mx-[20px] rounded-lg block mb-10 bg-cover bg-center px-6 py-8 mt-10" 
style="background-image: url({{ Vite::asset('resources/assets/bg-lowongan.png') }});">
    <h1 class="text-white font-semibold text-md lg:text-2xl">Cari lowongan pekerjaan</h1>
    <form method="GET" class="lg:flex block mt-3 gap-4">
        @csrf
        <div>
            <input type="text" name="search_inpur" id="small-input" placeholder="Masukkan Nama Pekerjaan"
                class="mb-2 block w-full lg:w-60 p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div>
            <select name="province" id="province"
                class="mb-2 block w-full lg:w-60 p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="">Pilih Provinsi</option>
                @foreach ($provinces as $province)
                    <option value="{{ $province['name'] }}">{{ $province['name'] }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button
                class="w-full lg:w-20 text-white hover:bg-biru-baru bg-blue-800 lg:bg-biru-baru lg:hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cari</button>
        </div>
    </form>
</div>

<!-- card & pagination -->

<div class="mt-4">    
    @include('components/card.cardLowongan')
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

@endsection
