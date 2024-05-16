@extends('layouts.PilihRegistrasi')
@section('contentusercomp')
    <div class="w-full h-screen">

        <div class=" flex justify-center flex-row w-full pt-20 pb-5">
            <img class="size-20" src="{{ Vite::asset('resources/assets/logo3.svg')}}" alt="">
        </div>

        <div class="flex flex-col text-center font-bold text-2xl">
            <p>Bergabung sebagai</p>
            <p>Perusahaan atau Pekerja</p>
        </div>

        <div class="flex justify-center mt-7 mb-5 gap-5">
            <div class="w-[300px] bg-white rounded-lg shadow p-5 border transition-all duration-300 ease-in-out border-LightGrey focus:border-blue-500" id="selectcard1">

                    <img class="rounded-t-lg" src="{{ Vite::asset('resources/assets/Rectangle 25 (1).svg') }}" alt="" />
                <div class="text-xl font-semibold text-start w-60">
                    <h2>Perusahaan yang mencari Pekerja🏢</h2>
                </div>
            </div>


            <div class="w-[300px] bg-white rounded-lg shadow p-5 border transition-all duration-300 ease-in-out border-LightGrey focus:border-blue-500" id="selectcard2">
                    <img class="rounded-t-lg" src="{{ Vite::asset('resources/assets/Rectangle 25.svg') }}" alt="" />
                <div class="text-xl font-semibold text-start w-60">
                    <h2>Pekerja yang mencari Pekerjaan🧑‍🏭</h2>
                </div>
            </div>
        </div>

        <div class="flex justify-center text-LightGrey">
            <a href="" id="registlink">
                <button class="bg-DarkWhite rounded-full py-2 px-4 cursor-not-allowed transition-all duration-300 ease-in-out" id="registbtn" type="button">
                    Daftar Sekarang
                </button>
            </a>
        </div>

    </div>
@endsection
