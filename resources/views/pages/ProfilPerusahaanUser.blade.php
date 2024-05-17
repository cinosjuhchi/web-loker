@extends('layouts.DefaultLayout')
@section('main')
<div class="mx-[20px] lg:mx-[70px] mt-12">
    <h1 class="text-xl lg:text-3xl font-semibold">Selamat datang, username👋</h1>
    <p class="font-medium mt-2">Cari pekerjaan yang anda inginkan sekarang!</p>
</div>

<div class="mb-10 mx-[20px] lg:mx-[70px] ">
    <form action="" class="lg:flex block gap-4 lg:mt-7 mt-3  ">
        <div class="lg:flex lg:gap-4 ">
        <div class="w-full lg:w-[530px]">
            <input type="text" id="small-input" placeholder="Cari pekerjaan, perusahaan" 
                class="mb-2 w-full p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="w-full lg:w-[530px]">
            <select name="province" id="province" 
                class="mb-2 w-full p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="">Pilih Provinsi</option>
                @foreach ($provinces as $province)
                    <option value="{{ $province['name'] }}">{{ $province['name'] }}</option>
                @endforeach
            </select>
        </div>
        </div>
        <div class="w-full lg:w-24 ">
            <button type="button" 
                class="h-11 w-full text-center text-white bg-biru-baru hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Cari
            </button>
        </div>
    </form>
</div>

<div class="mb-10 mx-[20px] lg:mx-[60px]">
   
    <h1 class="font-semibold text-2xl lg:text-3xl">Rekomendasi Lowongan Kerja Untukmu</h1>
</div>

    <div class="mx-[4.5rem] gap-5 grid grid-cols-4 mt-12 mb-12">
        <div class="">
            <div class=" mx-auto w-72 p-4 bg-white border-2 rounded-lg">
                <div class="flex items-center">
                    <img src="{{ Vite::asset('resources/assets/contoh.png') }}" alt="Alfamart Logo" class=" mr-3">
                    <div>
                        <p>PT. Alfamart</p>
                    </div>
                </div>
            </div>
        </div>
        
       
       
       
        
       
       
       
        
    </div>
@endsection
