@extends('layouts.DefaultLayout')
@section('main')
<div class="mx-[70px] mt-8">
    <h1 class=" font-semibold  text-3xl">Daftar Pelamar Kerja</h1>
</div>

    <div class="flex  gap-4 mx-[70px]">
        <div class="">
    <form class=" mt-6">
    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-44 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option selected>Terbaru</option>
      <option value="US">United States</option>
      <option value="CA">Canada</option>
      <option value="FR">France</option>
      <option value="DE">Germany</option>
    </select>
  </form>
</div>
        <div class="">
    <form class=" mt-6">
    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option selected>Urutkan berdasarkan</option>
      <option value="US">United States</option>
      <option value="CA">Canada</option>
      <option value="FR">France</option>
      <option value="DE">Germany</option>
    </select>
  </form>
</div>

<div class="mt-6">
    <input type="text" id="small-input" class=" block mx-[70]  p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Pelamar">
</div>

<div>
    <button
    class="w-full mt-6 lg:w-20 text-white hover:bg-biru-tuwak bg-biru-baru lg:bg-biru-tuwak lg:hover:bg-biru-baru focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cari</button>
</div>
</div>

@endsection