@extends('layouts.LandingLayout')
@section('LandingPage')

<div class=" w-full">
    <div class="lg:m-[150px] mx-[15px] lg:flex block  ">
        <div class="lg:w-[90%] lg:mt-[40px] w-full mt-[50px] block">
            <h1 class="font-bold text-2xl lg:w-[600px] w-full text-left">Temukan pekerjaan sesuai minat & keterampilan <br> anda. Cek lowongan di situs kami!</h1>
            <p class="mt-6 w-full">Di sini, Anda akan menemukan lingkungan kerja yang inklusif <br> dan kolaboratif, di mana setiap suara dihargai dan setiap ide didorong <br> untuk tumbuh. Kami percaya bahwa keragaman adalah kunci untuk <br> inovasi, dan kami berkomitmen untuk merangkul perbedaan agar <br> dapat menciptakan solusi yang lebih baik.</p>
        </div>
        <div class="lg:w-[40%] lg:block hidden">
            <img src="{{ Vite::asset('resources/assets/Rectangle26.png') }}" alt="" class="h-[300px]">
        </div>
    </div>
    
    <div class="mt-10">
        <h1 class="font-bold text-2xl mb-10 lg:text-center text-left mx-2">Apa Pekerjaan Yang Anda Inginkan?</h1>
    </div>
    <div class="px-6 lg:flex justify-center block">
        <div class="rounded-lg border-black border-2 mb-10 mx-1">
            <img src="{{ Vite::asset('resources/assets/Rectangle34.png') }}" alt="image caption" class="w-full">
            <div class="px-6 py-6 bg-biru-muda">
                <div class="text-2xl text-center">Administration</div>
            </div>
        </div>
        <div class="rounded-lg border-black border-2 mb-10 mx-1">
            <img src="{{ Vite::asset('resources/assets/Rectangle35.png') }}" alt="image caption" class="w-full">
            <div class="px-6 py-6 bg-biru-muda">
                <div class="text-2xl text-center">Programmer</div>
            </div>
        </div>
        <div class="rounded-lg border-black border-2 mb-10 mx-1">
            <img src="{{ Vite::asset('resources/assets/Rectangle37.png') }}" alt="image caption" class="w-full">
            <div class="px-6 py-6 bg-biru-muda">
                <div class="text-2xl text-center">Designer</div>
            </div>
        </div>
        <div class="rounded-lg border-black border-2 mb-10 mx-1">
            <img src="{{ Vite::asset('resources/assets/Rectangle78.png') }}" alt="image caption" class="w-full">
            <div class="px-6 py-6 bg-biru-muda">
                <div class="text-2xl text-center">Sales & Marketing</div>
            </div>
        </div>
    </div>
    
    <div class="mt-20 mx-[15px] lg:mx-[70px]">
        <div class="flex justify-center">
            <h1 class="font-bold text-2xl mb-10 text-center mx-2">4 Langkah Mendapatkan Pekerjaan</h1>
        </div>
        <div class="flex justify-center">
            <img src="{{ Vite::asset('resources/assets/Rectangle6.png') }}" alt="image caption" class="w-full h-80 pb-0 px-6 hidden lg:block">
            <div class="w-full lg:w-auto">
                <div class="w-full lg:w-[700px] h-15 bg-LightBlue rounded-md mb-4 flex items-center">
                    <div class="rounded-full text-white bg-biru-tuwak h-[28px] w-[28px] text-center font-bold mx-3">1</div>
                    <h1 class="mx-5 pt-3.5 font-bold text-xl mb-4">Daftarkan diri kamu di WorkSeeker</h1>
                </div>
                <div class="w-full lg:w-[700px] h-15 bg-LightBlue rounded-md mb-4 flex items-center">
                    <div class="rounded-full text-white bg-biru-tuwak h-[28px] w-[28px] text-center font-bold mx-3">2</div>
                    <h1 class="mx-5 pt-3.5 font-bold text-xl mb-4">Lengkapi informasi data diri anda</h1>
                </div>
                <div class="w-full lg:w-[700px] h-15 bg-LightBlue rounded-md mb-4 flex items-center">
                    <div class="rounded-full text-white bg-biru-tuwak h-[28px] w-[28px] text-center font-bold mx-3">3</div>
                    <h1 class="mx-5 pt-3.5 font-bold text-xl mb-4">Cari lowongan pekerjaan</h1>
                </div>
                <div class="w-full lg:w-[700px] h-15 bg-LightBlue rounded-md mb-4 flex items-center">
                    <div class="rounded-full text-white bg-biru-tuwak h-[28px] w-[28px] text-center font-bold mx-3">4</div>
                    <h1 class="mx-5 pt-3.5 font-bold text-xl mb-4">Ajukan lowongan pekerjaan anda</h1>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


@section('LandingPage2')
<div class="flex justify-center relative mt-20">
    <img class="w-full h-full object-cover" src="{{ Vite::asset('resources/assets/Rectangle86.png')}}" alt="image description">
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
        <h1 class="font-semibold text-xl lg:text-4xl hidden lg:block">#WorkSeeker</h1>
        <h1 class="font-semibold text-xl lg:text-4xl mt-4 hidden lg:block">Temukan Pekerjaan, <br/> Capai Impian!</h1>
        <div class="flex lg:mt-8 mt-4 space-x-4">
            <a href="/register" class="bg-biru-tuwak hover:bg-blue-300 text-white font-medium rounded-3xl text-sm px-9 py-2.5">Daftar</a>
            <a href="/login" class="border border-white hover:bg-black text-white font-medium rounded-3xl text-sm px-9 py-2">Masuk</a>
        </div>
    </div>
</div>
@endsection

