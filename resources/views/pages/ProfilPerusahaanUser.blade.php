@extends('layouts.DefaultLayout')
@section('main')
    <div class="mx-[4.5rem] mt-8">
        <h1 class="text-4xl font-semibold">Cari Profil Perusahaan Kamu</h1>
        <p class="text-gray-400 mt-3">Cari profil perusahaan yang ingin kamu lihat</p>
    </div>

    <div class="mb-10 mx-[70px]">
        <form action="" class="flex gap-4 mt-7">
            <div>
                <input type="text" id="small-input" placeholder="Cari pekerjaan, perusahaan"
                    class=" ps-4 block w-[530px] p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <div>
                <input type="text" id="small-input" placeholder="Wilayah"
                    class=" ps-4 block w-[450px] p-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <div>
                <button type="button"
                    class="h-11 text-center w-24  text-white bg-biru-baru hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cari</button>
            </div>
        </form>
    </div>

    <div class="mx-[70px]">
        <h1 class=" text-3xl font-semibold">Rekomendasi Perusahaan Terbaik</h1>
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
        <div class="mt-5">
            <div class=" mx-auto w-72 p-4 bg-white border-2 rounded-lg">
                <div class="flex items-center">
                    <img src="{{ Vite::asset('resources/assets/contoh.png') }}" alt="Alfamart Logo" class=" mr-3">
                    <div>
                        <p>PT. Alfamart</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class=" mx-auto w-72 p-4 bg-white border-2 rounded-lg">
                <div class="flex items-center">
                    <img src="{{ Vite::asset('resources/assets/contoh.png') }}" alt="Alfamart Logo" class=" mr-3">
                    <div>
                        <p>PT. Alfamart</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class=" mx-auto w-72 p-4 bg-white border-2 rounded-lg">
                <div class="flex items-center">
                    <img src="{{ Vite::asset('resources/assets/contoh.png') }}" alt="Alfamart Logo" class=" mr-3">
                    <div>
                        <p>PT. Alfamart</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class=" mx-auto w-72 p-4 bg-white border-2 rounded-lg">
                <div class="flex items-center">
                    <img src="{{ Vite::asset('resources/assets/contoh.png') }}" alt="Alfamart Logo" class=" mr-3">
                    <div>
                        <p>PT. Alfamart</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class=" mx-auto w-72 p-4 bg-white border-2 rounded-lg">
                <div class="flex items-center">
                    <img src="{{ Vite::asset('resources/assets/contoh.png') }}" alt="Alfamart Logo" class=" mr-3">
                    <div>
                        <p>PT. Alfamart</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class=" mx-auto w-72 p-4 bg-white border-2 rounded-lg">
                <div class="flex items-center">
                    <img src="{{ Vite::asset('resources/assets/contoh.png') }}" alt="Alfamart Logo" class=" mr-3">
                    <div>
                        <p>PT. Alfamart</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class=" mx-auto w-72 p-4 bg-white border-2 rounded-lg">
                <div class="flex items-center">
                    <img src="{{ Vite::asset('resources/assets/contoh.png') }}" alt="Alfamart Logo" class=" mr-3">
                    <div>
                        <p>PT. Alfamart</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
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
