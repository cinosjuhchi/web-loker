@extends('layouts.DefaultLayout')
@section('main')
<div class="mx-[70px] mt-8">
    <h1 class=" font-semibold  text-3xl">Daftar Pelamar Kerja</h1>
</div>

<form class=" mt-6">
  <div class="lg:flex block  gap-4 lg:mx-[70px] mx-[15px] mt-6">
      <div class="w-full mb-2">

        <select id="time" name="time" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option value="latest" selected>Terbaru</option>
          <option value="oldest">Terlama</option>      
        </select>
     
    </div>
            <div class="w-full mb-2">
                @php
                $currentYear = date('Y');
                @endphp
        <select id="year" name="year" class="lg:w-56 w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option value="" selected>Urutkan berdasarkan</option>
          @for ($year = $currentYear; $year >= 2016; $year--)
            <option value="{{ $year }}">{{ $year }}</option>
        @endfor
        </select> 

</div>

      <div class="lg:flex">
  
          <input type="text" name="search_input" id="voice-search" class="bg-gray-50 border mb-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block lg:w-[200px] ps-4 p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-full " placeholder="Cari Pelamar"/>
          
          <button type="submit" class=" px-9 py-2 lg:mx-4 text-sm font-medium mb-2 text-white bg-biru-tuwak rounded-lg border border-blue-700 hover:bg-biru-baru focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-full">Cari
          </button>
      </div>
 
</div>
</form>

{{-- Tableee --}}
<div class="mb-60">
  @include('components/table.TablePelamar')
</div>

@endsection