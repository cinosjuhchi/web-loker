@extends('layouts.LandingLayout')
@section('LandingPage')

<div class="lg:m-[70px] lg:flex min-[300px]:block min-[300px]:m-[15px]">
                <div class="lg:w-[90%] lg:mt-[40px] min-[300px]:w-full min-[300px]:mt-[50px] min-[300px]:block">
                    <h1 class="font-bold lg:text-2xl min-[300px]:text-2xl lg:w-[600px] min-[300px]:w-full text-left">Temukan pekerjaan sesuai minat & keterampilan <br> anda. Cek lowongan di situs kami!</h1>
                    <h1 class="mt-6  min-[300px]:w-full">Di sini, Anda akan menemukan lingkungan kerja yang inklusif <br> dan kolaboratif, di mana setiap suara dihargai dan setiap ide didorong <br> untuk  tumbuh. Kami percaya bahwa keragaman adalah kunci untuk <br> inovasi, dan  kami berkomitmen untuk merangkul perbedaan agar <br> dapat menciptakan  solusi yang lebih baik.</h1>
                </div>   
                <div class="lg:w-[40%] lg:block min-[300px]:hidden">
                  <img src="{{ Vite::asset('resources/assets/Rectangle26.png') }}"  alt="" class="h-[300px] ">
                </div>   
            </div>

<div class="mt-10">
    <h1 class="font-bold text-2xl mb-10 lg:text-center min-[300px]:text-left lg:mx-[70px] min-[300px]:mx-[15px] ">Apa Pekerjaan Yang Anda Inginkan?</h1>
</div>
<div class="px-6 lg:flex justify-center min-[300px]:block">
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
        <h1 class="font-bold text-2xl mb-10 lg:text-center min-[300px]:text-left mx-2 ">4 Langkah Mendapatkan Pekerjaan</h1>
    </div>
   <div class="flex justify-center">
   <img src="{{ Vite::asset('resources/assets/Rectangle6.png') }}" alt="image caption" class="w-full h-80 pb-0 pt-[-5px] px-6 lg:block min-[300px]:hidden">
  <div class=" min-[300px]:w-full">
    <div class="lg:w-[700px] min-[300px]:w-full h-15 bg-LightBlue  rounded-md mb-4 flex" >
    <div class="rounded-full text-white bg-biru-tuwak h-[28px] w-[28px]   text-center text-bold my-auto mx-3">1</div>
        <h1 class=" mx-5 pt-3.5 font-bold text-xl flex justify-items-center mb-4 ml-[8px]" >Daftarkan diri kamu di WorkSeeker</h1>
    </div>
    <div class="lg:w-[700px] min-[300px]:w-fullh-15 bg-LightBlue  rounded-md mb-4 flex" >
    <div class="rounded-full text-white bg-biru-tuwak h-[28px] w-[28px]   text-center text-bold my-auto mx-3">2</div>
        <h1 class=" mx-5 pt-3.5 font-bold text-xl flex justify-items-center mb-4 ml-[8px]" >Lengkapi informasi data diri anda</h1>
    </div>
    <div class="lg:w-[700px] min-[300px]:w-fullh-15 bg-LightBlue  rounded-md mb-4 flex" >
    <div class="rounded-full text-white bg-biru-tuwak h-[28px] w-[28px]   text-center text-bold my-auto mx-3">3</div>
        <h1 class=" mx-5 pt-3.5 font-bold text-xl flex justify-items-center mb-4 ml-[8px]" >Cari lowongan pekerjaan</h1>
    </div>
    
    <div class="lg:w-[700px] min-[300px]:w-fullh-15 bg-LightBlue  rounded-md mb-4 flex" >
    <div class="rounded-full text-white bg-biru-tuwak h-[28px] w-[28px]   text-center text-bold my-auto mx-3">4</div>
        <h1 class=" mx-5 pt-3.5 font-bold text-xl flex justify-items-center mb-4 ml-[8px]" >Ajukan lowongan perkerjaan anda</h1>
    </div>
    
  </div>
</div>
</div>
@endsection


@section('LandingPage2')
<div class="flex justify-center relative " >
<img class="w-full h-full bg-slate-600" src="{{ Vite::asset('resources/assets/Rectangle86.png')}}" alt="image description">
<h1 class="absolute px-4 text-white top-10 font-semibold lg:text-4xl min-[300px]:text-xl text-center w-fit lg:block min-[300px]:hidden">
#WorkSeeker
</h1>
<h1 class="absolute px-4 text-white top-28 font-semibold lg:text-4xl min-[300px]:text-xl text-center lg:block min-[300px]:hidden">
Temukan Perkejaan, <br/>
Capai Impian!   
</h1>

<button type="button" class="absolute lg:top-56 min-[300px]:my-8 lg:my-0 ease-in duration-75 text-white bg-biru-tuwak  hover:bg-blue-300 font-medium rounded-3xl text-sm px-9 py-2.5 me-32 mb-2 "><a href="/register">Daftar</a></button>

<button type="button" class="absolute lg:top-56  min-[300px]:my-8 lg:my-0 text-white outline outline-2 hover:bg-black font-medium rounded-3xl text-sm px-9 py-2 me-2 mx-32 mb-2 "><a href="/login">Masuk</a></button>
</div>
@endsection