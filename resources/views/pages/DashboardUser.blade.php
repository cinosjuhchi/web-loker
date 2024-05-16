@extends('layouts.DefaultLayout')
@section('main')
<div class="mx-[70px] mt-12">
<h1 class="text-3xl font-semibold" >Selamat datang, {{ $user->username }}👋</h1>
<p class="font-medium mt-2" >Cari pekerjaan yang anda inginkan sekarang!</p>
</div>

<div class="mb-10 lg:mx-[70px] min-[300px]:mx-10" >
    <form action="" class="lg:flex min-[300px]:block gap-4 lg:mt-7 min-[300px]:mt-3">
        <div>
            <input type="text" id="small-input"   placeholder="Cari pekerjaan, perusahaan" class="  mb-2 lg:w-[530px] min-[300px]:w-full p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div>
            <select name="province" id="province" class="mb-2 lg:w-[530px] min-[300px]:w-full p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="">Pilih Provinsi</option>
                @foreach ($provinces as $province)
                    <option value="{{ $province['name'] }}">{{ $province['name'] }}</option>
                @endforeach
            </select>
        </div>

        <div>
        <button type="button" class="h-11 text-center lg:w-24 min-[300px]:w-full   text-white bg-biru-baru hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cari</button>
        </div>
    </form>
</div>

<div class="mb-10 min-[300px]:mx-10 lg:mx-[70px]" >
    <h1 class="flex justify-center font-semibold lg:text-2xl min-[300px]:text-xl text-center" >Anda belum melengkapi Profile anda</h1>
    <a class="underline text-biru-tuwak font-semibold text-xl lg:mb-16 min-[300px]:mb-10 justify-center flex lg:mt-4 min-[300px]:mt-1 min-[300px]:text-xl" href="#">Lengkapi Profile</a>
    <h1 class=" font-semibold lg:text-3xl min-[300px]:text-2xl" >Rekomendasi Lowongan Kerja Untukmu</h1>
</div>

<<<<<<< HEAD
<div class="min-[300px]:mt-[-30px] mb-20">
    @include('components/card.cardLowongan')
</div>

=======
>>>>>>> 3c2b7b1bad3320a1ff75bcb4693a06af80eae0d6
@endsection