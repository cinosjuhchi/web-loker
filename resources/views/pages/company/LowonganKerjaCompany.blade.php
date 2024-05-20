@extends('layouts.DefaultLayout')
@section('main')
<div class=" lg:mx-[70px] mt-10 mx-[15px]">
    <h1 class="text-3xl font-semibold" >Lowongan Kerja yang sudah dibuat</h1>
    <p class="text-lg text-gray-500 mt-2">Lihat, ubah, atau hapus lowongan kerja yang sudah pernah dibuat</p>
</div>

<form class=" mt-6">
    <div class="lg:flex block  gap-4 lg:mx-[70px] mx-[15px] mt-6">
        <div class="w-full mb-2">
  
    <select id="countries" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option selected>Terbaru</option>
      <option value="US">nico ganteng</option>
      <option value="US">nico tampan</option>
      <option value="US">nico kece</option>
    </select>
 
</div>
        <div class="w-full mb-2">
    
    <select id="countries" class="lg:w-56 w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option selected>Urutkan berdasarkan</option>
      <option value="US">2016</option>
      <option value="CA">2017</option>
      <option value="FR">2018</option>
    </select>
  
</div>

        <div class="lg:flex">
    
            <input type="text" id="voice-search" class="bg-gray-50 border mb-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block lg:w-80 ps-4 p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-full" placeholder="Cari Lowongan Pekerjaan" required />
            
            <button type="submit" class=" px-9 lg:px-3 py-2 lg:mx-4 text-sm font-medium mb-2 text-white bg-biru-tuwak rounded-lg border border-blue-700 hover:bg-biru-baru focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-full lg:w-20">Cari
            </button>
        </div>
   
</div>
</form>
@include('components.table.TableLoker')
<div>

</div>


@endsection