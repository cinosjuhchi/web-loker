@extends('layouts.LandingLayout')
@section('LandingPage')

<div class="lg:m-[70px] lg:flex min-[300px]:block min-[300px]:m-[15px]">
                <div class="lg:w-[90%] lg:mt-[40px] min-[300px]:w-full min-[300px]:mt-[100px] min-[300px]:block">
                    <h1 class="font-bold lg:text-2xl min-[300px]:text-2xl lg:w-[600px] min-[300px]:w-full min-[300px]:text-center lg:text-left">Temukan pekerjaan sesuai minat & keterampilan <br> anda. Cek lowongan di situs kami!</h1>
                    <h1 class="mt-6">Di sini, Anda akan menemukan lingkungan kerja yang inklusif <br> dan kolaboratif, di mana setiap suara dihargai dan setiap ide didorong <br> untuk  tumbuh. Kami percaya bahwa keragaman adalah kunci untuk <br> inovasi, dan  kami berkomitmen untuk merangkul perbedaan agar <br> dapat menciptakan  solusi yang lebih baik.</h1>
                </div>   
                <div class="lg:w-[40%] lg:block min-[300px]:hidden">
                  <img src="{{ Vite::asset('resources/assets/Rectangle26.png') }}"  alt="" class="h-[300px] ">
                </div>   
            </div>

<div class="flex justify-center mt-10 font-bold text-3xl">
    <h1 class="font-bold text-3xl mb-10">Apa Pekerjaan Yang Anda Inginkan?</h1>
</div>
<div class="px-6 flex justify-center">
    <div class="rounded-lg border-black border-2 mb-10 mx-1">
        <img src="{{ Vite::asset('resources/assets/Rectangle34.png') }}" alt="image caption"
         class="w-full">
        <div class="px-6 py-6 bg-biru-muda">
            <div class="text-2xl text-center">Administration</div>
        </div>
    </div>
    <div class="rounded-lg border-black border-2 mb-10 mx-1">
        <img src="{{ Vite::asset('resources/assets/Rectangle35.png') }}" alt="image caption"
         class="w-full">
        <div class="px-6 py-6 bg-biru-muda" >
            <div class="text-2xl text-center">Programmer</div>
        </div>
    </div>
    <div class="rounded-lg border-black border-2 mb-10 mx-1">
        <img src="{{ Vite::asset('resources/assets/Rectangle37.png') }}" alt="image caption"
         class="w-full">
        <div class="px-6 py-6 bg-biru-muda" >
            <div class="text-2xl text-center">Designer</div>
        </div>
    </div>
    <div class="rounded-lg border-black border-2 mb-10 mx-1">
        <img src="{{ Vite::asset('resources/assets/Rectangle78.png') }}" alt="image caption"
         class="w-full">
        <div class="px-6 py-6 bg-biru-muda">
            <div class="text-2xl text-center ">Sales & Marketing</div>
        </div>
    </div>
</div>


<div class=" mt-20">
    <div class="flex justify-center">
        <h1 class="font-bold text-3xl mb-8">4 Langkah Mendapatkan Pekerjaan</h1>
    </div>
   <div class="flex justify-center">
   <img src="{{ Vite::asset('resources/assets/Rectangle6.png') }}" alt="image caption" class="w-full h-80 pb-0 pt-[-5px] px-6">
  <div>
    <div class="w-[700px] h-15 bg-LightBlue  rounded-md mb-4 flex" >
    <div class="rounded-full text-white bg-biru-tuwak h-[28px] w-[28px] text-center pt-0.5 text-bold text-base my-auto ml-5">1</div>
        <h1 class=" mx-5 pt-3.5 font-bold text-xl flex justify-items-center mb-4 ml-[8px]" >Daftarkan diri kamu di WorkSeeker</h1>
    </div>
    <div class="w-[700px] h-15 bg-LightBlue  rounded-md mb-4 flex" >
    <div class="rounded-full text-white bg-biru-tuwak h-[28px] w-[28px] text-center pt-0.5 text-semibold text-sm my-auto ml-5">2</div>
        <h1 class=" mx-5 pt-3.5 font-bold text-xl flex justify-items-center mb-4 ml-[8px]" >Lengkapi informasi data diri anda</h1>
    </div>
    <div class="w-[700px] h-22 bg-LightBlue  rounded-md mb-4 flex" >
    <div class="rounded-full text-white bg-biru-tuwak h-[28px] w-[32px] text-center pt-0.5 text-semibold text-sm my-auto ml-5">3</div>
        <h1 class=" mx-5 pt-3.5 font-bold text-xl flex justify-items-center mb-4 ml-[8px]" >Cari lowongan pekerjaan di perusahaan yang membuka
            lowongan pekerjaan</h1>
    </div>
    <div class="w-[700px] h-15 bg-LightBlue  rounded-md mb-4 flex" >
    <div class="rounded-full text-white bg-biru-tuwak h-[28px] w-[28px] text-center pt-0.5 text-semibold text-sm my-auto ml-5">4</div>
        <h1 class=" mx-5 pt-3.5 font-bold text-xl flex justify-items-center mb-4 ml-[8px]" >Ajukan lowongan perkerjaan anda</h1>
    </div>
    
  </div>
</div>
</div>
@endsection


@section('LandingPage2')
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