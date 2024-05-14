@extends('layouts.GuestLayout')
@section('LandingPage')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="w-full flex">
 <div class="w-1/2 h-1/2 ps-[20px] ">
 <h1 class="font-extrabold text-3xl px-6">Ingin menemukan pekerjaan yang sesuai dengan minat dan keterampilan Anda? Jelajahi lowongan pekerjaan di website kami!
</h1>
<h1 class="mt-6 px-6">Di sini, Anda akan menemukan lingkungan kerja yang inklusif dan <br> kolaboratif, di mana setiap suara dihargai dan setiap ide didorong untuk <br> tumbuh. Kami percaya bahwa keragaman adalah kunci untuk inovasi, dan <br> kami berkomitmen untuk merangkul perbedaan agar dapat menciptakan <br> solusi yang lebih baik.</h1>
</div>

<div class="w-1/2 h-1/2">
    <img src="{{ Vite::asset('resources/assets/Rectangle26.png') }}" alt="" class="h-72 ps-[270px] mt-2">

</div>
</div>
<div class="flex justify-center mt-10 font-bold text-3xl">
    <h1 class="font-bold text-3xl mb-10">Apa Pekerjaan Yang Anda Inginkan?</h1>
</div>
<div class="container mx-auto px-6 sm:flex">
    <div class="rounded-md shadow-lg mb-10 mx-2">
        <img src="{{ Vite::asset('resources/assets/Rectangle34.png') }}" alt="image caption"
         class="w-full">
        <div class="px-6 py-6 bg-biru-muda">
            <div class="text-2xl text-center">Administration</div>
        </div>
    </div>
    <div class="rounded-md shadow-lg mb-10 mx-2">
        <img src="{{ Vite::asset('resources/assets/Rectangle35.png') }}" alt="image caption"
         class="w-full">
        <div class="px-6 py-6 bg-biru-muda" >
            <div class="text-2xl text-center">Programmer</div>
        </div>
    </div>
    <div class="rounded-md shadow-lg mb-10 mx-2">
        <img src="{{ Vite::asset('resources/assets/Rectangle37.png') }}" alt="image caption"
         class="w-full">
        <div class="px-6 py-6 bg-biru-muda" >
            <div class="text-2xl text-center">Designer</div>
        </div>
    </div>
    <div class="rounded-md shadow-lg mb-10 mx-2">
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
   <div class="flex">
   <img src="{{ Vite::asset('resources/assets/Rectangle6.png') }}" alt="image caption" class="w-5/12 px-6">
  <div>
    <div class="" >
        <h1 class="font-bold text-xl  mb-4 bg-biru-muda" >Daftarkan diri kamu di WorkSeeker</h1>
    </div>
    <div class=" " >
        <h1 class="font-bold text-xl  mb-4 bg-biru-muda" >Lengkapi informasi data diri anda</h1>
    </div>
    <div class="" >
        <h1 class="font-bold text-xl  mb-4 bg-biru-muda" >Cari lowongan pekerjaan di perusahaan yang membuka
lowongan pekerjaan</h1>
    </div>
    <div class="" >
        <h1 class="font-bold text-xl pe-80 mb-4 bg-biru-muda" >Ajukan lowongan pekerjaan anda</h1>
    </div>
  </div>
</div>
</div>
@endsection


@section('LandingPage2')
<div class="flex justify-center relative" >
<img class="w-full" src="{{ Vite::asset('resources/assets/Rectangle86.png')}}" alt="image description">
<h1 class="absolute px-4 text-white top-10 font-semibold text-4xl text-center">
#WorkSeeker
</h1>
<h1 class="absolute px-4 text-white top-28 font-semibold text-4xl text-center">
Temukan Pekerjaan, <br/>
Capai Impian!   
</h1>

<button type="button" class="absolute top-56 ease-in duration-75 text-white bg-biru-tuwak  hover:bg-blue-300 font-medium rounded-3xl text-sm px-9 py-2.5 me-32 mb-2 ">Daftar</button>

<button type="button" class="absolute top-56  text-white outline outline-2 hover:bg-black font-medium rounded-3xl text-sm px-9 py-2 me-2 mx-32 mb-2 ">Masuk</button>
</div>
@endsection


</body>
</html>
