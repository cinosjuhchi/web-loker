@extends('layouts.landingLayout')
@section('Carilowongan')

    <div class="mx-auto bg-slate-500 w-[1200px] h-40 rounded-lg flex relative mb-10" >
    <img src="{{ Vite::asset('resources/assets/bg-lowongan.png') }}" alt="image caption" class="mx-auto w-full">
    <h1 class="absolute text-white font-semibold text-2xl ml-24 mt-8"> Cari lowongan pekerjaan</h1>

    <div class="absolute ml-8" >
    <input type="email" id="email" class=" h-11 w-56 mt-20 ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nama Pekerjaan" required />
    </div>

    <div class="absolute ml-8" >
    <input type="email" id="email" class=" h-11 w-56 mt-20 ml-[300px] bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tuliskan Klasifikasi Anda" required />
    </div>

    <div class="absolute ml-8" >
    <input type="email" id="email" class=" h-11 w-72  mt-20 ml-[536px] bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Pinggiran Kota atau Wilayah" required />
    </div>

    <div class="absolute ml-8" >
    <button type="button" class="h-11 text-center w-24 mt-20 ml-[836px] text-white bg-biru-baru hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cari</button>
    </div>
</div>


<!-- card & pagination -->
<div>

</div>



<div class="flex justify-center relative" >
<img class="w-full" src="{{ Vite::asset('resources/assets/Rectangle86.png')}}" alt="image description">
<h1 class="absolute px-4 text-white top-10 font-semibold text-4xl text-center w-fit">
#WorkSeeker
</h1>
<h1 class="absolute px-4 text-white top-28 font-semibold text-4xl text-center">
Temukan Perkejaan, <br/>
Capai Impian!   
</h1>

<button type="button" class="absolute top-56 ease-in duration-75 text-white bg-biru-tuwak  hover:bg-blue-300 font-medium rounded-3xl text-sm px-9 py-2.5 me-32 mb-2 ">Daftar</button>

<button type="button" class="absolute top-56  text-white outline outline-2 hover:bg-black font-medium rounded-3xl text-sm px-9 py-2 me-2 mx-32 mb-2 ">Masuk</button>
</div>
@endsection