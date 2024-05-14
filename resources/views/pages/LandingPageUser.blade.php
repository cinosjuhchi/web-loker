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
 <div class="w-1/2 h-1/2 ps-[190px] ">
 <h1 class="font-extrabold text-4xl">Ingin menemukan pekerjaan <br>
 yang memberikan tantangan? <br>
 Tingkatkan karier Anda dengan <br>
 bergabung bersama tim kami. <br>
 Peluang menanti 
 <br>
 Anda di sini.
</h1>
<h1 class="mt-2">Di sini, Anda akan menemukan lingkungan kerja yang inklusif dan kolaboratif, <br> di mana setiap suara dihargai brdan setiap ide didorong untuk tumbuh. Kami percaya bahwa keragaman adalah kunci untuk inovasi, dan kami berkomitmen untuk merangkul perbedaan agar dapat menciptakan solusi yang lebih baik.</h1>
</div>

<div class="w-1/2 h-1/2">
    <img src="{{ Vite::asset('resources/assets/Rectangle26.png') }}" alt="" class="h-72 ps-[270px] mt-2">

</div>
</div>
<div class="flex justify-center mt-24 font-bold text-3xl">
    <h1 class="font-bold text-3xl">Apa Pekerjaan Yang Anda Inginkan?</h1>
</div>
    <div class="flex flex-row">
    <div><h1></h1></div>
    <div><h1></h1></div>
    <div><h1></h1></div>
    </div>
 


</body>
</html>
@endsection