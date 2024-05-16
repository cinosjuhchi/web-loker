@extends('layouts.DefaultLayout')
@section('main')
    <div class="lg:mx-[100px] mt-16 min-[300px]:mx-[40px]  h-auto rounded-lg block mb-10 bg-image px-10 py-10 "
        style="background-image: url( {{ Vite::asset('resources/assets/bg-lowongan.png') }} )">
        {{-- <img src="{{ Vite::asset('resources/assets/bg-lowongan.png') }}" alt="image caption" class="mx-auto w-[1200px] relative"> --}}
        <h1 class="text-white font-semibold lg:text-2xl min-[300px]:text-md"> Cari lowongan pekerjaan</h1>

        <form class="lg:flex min-[300px]:block mt-3 gap-4 ">
            <div>
                <input type="text" id="small-input" placeholder="Masukkan Nama Pekerjaan"
                    class=" mb-1 block w-60 p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>
                <select name="province" id="province"
                    class="mb-1 block w-60 p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Pilih Provinsi</option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province['name'] }}">{{ $province['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button
                    class="min-[300px]:w-60 lg:w-20 text-white bg-biru-baru hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-5 py-2.5  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cari</button>
            </div>

        </form>




    </div>


    <!-- card & pagination -->
    <div class="min-[300px]:mt-[-30px]">
        @include('components/card.cardLowongan')
    </div>



    <div class="flex justify-center relative mt-32">
        <img class="w-full h-full bg-slate-600" src="{{ Vite::asset('resources/assets/Rectangle86.png') }}"
            alt="image description">
        <h1
            class="absolute px-4 text-white top-10 font-semibold lg:text-4xl min-[300px]:text-xl text-center w-fit lg:block min-[300px]:hidden">
            #WorkSeeker
        </h1>
        <h1
            class="absolute px-4 text-white top-28 font-semibold lg:text-4xl min-[300px]:text-xl text-center lg:block min-[300px]:hidden">
            Temukan Perkejaan, <br />
            Capai Impian!
        </h1>

        <button type="button"
            class="absolute lg:top-56 min-[300px]:my-8 lg:my-0 ease-in duration-75 text-white bg-biru-tuwak  hover:bg-blue-300 font-medium rounded-3xl text-sm px-9 py-2.5 me-32 mb-2 "><a
                href="/register">Daftar</button>

        <button type="button"
            class="absolute lg:top-56  min-[300px]:my-8 lg:my-0 text-white outline outline-2 hover:bg-black font-medium rounded-3xl text-sm px-9 py-2 me-2 mx-32 mb-2 "><a
                href="/login">Masuk</a></button>
    </div>
@endsection
