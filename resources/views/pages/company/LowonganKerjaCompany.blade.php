@extends('layouts.DefaultLayout')
@section('main')
<div class=" mx-[70px] mt-10">
    <h1 class="text-3xl font-semibold" >Lowongan Kerja yang sudah dibuat</h1>
    <p class="text-lg text-gray-500 mt-2">Lihat, ubah, atau hapus lowongan kerja yang sudah pernah dibuat</p>
</div>


    <div class="flex  gap-4 mx-[70px] mt-6">
        <div class="">
    <form class=" mt-6">
    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-44 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option selected>Terbaru</option>
      <option value="US">nico ganteng</option>
      <option value="US">nico tampan</option>
      <option value="US">nico kece</option>
    </select>
  </form>
</div>
        <div class=" mr-[350px]">
    <form class=" mt-6">
    <select id="countries" class="w-56 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option selected>Urutkan berdasarkan</option>
      <option value="US">2016</option>
      <option value="CA">2017</option>
      <option value="FR">2018</option>
    </select>
  </form>
</div>

<div class="">
    <form class="flex items-center mt-6 mb-80 ">   
            <input type="text" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 ps-4 p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Lowongan Pekerjaan" required />
            <button type="button" class="absolute inset-y-0 end-0 flex items-center ">
            </button>
            <button type="submit" class=" px-9 py-2 mx-4 text-sm font-medium text-white bg-biru-tuwak rounded-lg border border-blue-700 hover:bg-biru-baru focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari
            </button>
        </div>
    </form>
</div>

{{-- card loker --}}
<div>

</div>


@endsection