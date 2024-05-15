@extends('layouts.GuestLayout')
@section('pasangLoker')
    <nav>
        @include('components.NavbarUser')
    </nav>
       
            <div class="lg:m-[70px] lg:flex min-[300px]:block min-[300px]:m-[15px]">
                <div class="lg:w-[60%] lg:mt-[110px] min-[300px]:w-full min-[300px]:mt-[100px] min-[300px]:block">
                    <h1 class="font-semibold lg:text-4xl min-[300px]:text-2xl lg:w-[530px] min-[300px]:w-full min-[300px]:text-center lg:text-left">Rekrut <span class="underline underline-offset-4 text-biru-tuwak">pekerja terbaik</span> untuk kesuksesan perusahaan Anda. <span class="underline underline-offset-4 text-biru-tuwak">Cepat dan efektif.</span></h1>
                    <a href="#"><button class="lg:mt-10 min-[300px]:mt-5 min-[300px]:mx-auto min-[300px]:block lg:mx-0 rounded-full bg-biru-tuwak py-2 px-5 text-white text-semibold">Pasang Lowongan</button></a>
                </div>   
                <div class="lg:w-[40%] lg:block min-[300px]:hidden">
                  <img src="{{ Vite::asset('resources/assets/pasangloker1.svg') }}"  alt="" class="h-[400px] ">
                </div>   
            </div>

            <div class="mt-[100px] mx-[70px]">
                <h1 class="font-semibold text-3xl text-center">Hanya dengan 3 langkah sederhana</h1>
                <div class="card flex mt-10 justify-between">
                    <div class="max-w-sm w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-5">
                    
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-biru-tuwak dark:text-white">1</h5>
                            <img src="{{ Vite::asset('resources/assets/pasangloker2.svg') }}" alt="">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Buat akun baru </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Anda hanya perlu melengkapi informasi perusahaan anda dan infromasi akun anda</p>
                        </div>
                    </div>

                    <div class="max-w-sm w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-5">
                    
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-biru-tuwak dark:text-white">2</h5>
                            <img src="{{ Vite::asset('resources/assets/pasangloker3.svg') }}" alt="">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Lengkapi Informasi Profile</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Kemudian pembuatan akun anda harus mengisi dengan detail terkait perusahaan anda</p>
                        </div>
                    </div>

                    <div class="max-w-sm w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-5">
                    
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-biru-tuwak dark:text-white">3</h5>
                            <img src="{{ Vite::asset('resources/assets/pasangloker4.svg') }}" alt="">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Pasang Lowongan Anda</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Setelah itu, anda dapat mengisi judul, deskripsi, dan lokasi ke pemasangan lowongan anda. Selamat lowongan anda sudah siap</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full mt-40 flex">
                <div class="w-fit">
                    <img src="{{ Vite::asset('resources/assets/pasangloker5.svg') }}" alt="" class=" w-[600px] object-cover">
                </div>

                <div class="bg-LightBlue w-full">
                    <div class="mt-[110px]  ml-10 ">
                        <div class="flex space-x-4 w-fit">
                            <img src="{{ Vite::asset('resources/assets/Star 1.svg') }}" alt="">
                            <img src="{{ Vite::asset('resources/assets/Star 1.svg') }}" alt="">
                            <img src="{{ Vite::asset('resources/assets/Star 1.svg') }}" alt="">
                            <img src="{{ Vite::asset('resources/assets/Star 1.svg') }}" alt="">
                            <img src="{{ Vite::asset('resources/assets/Star 1.svg') }}" alt="">
                        </div>

                        <div class="mt-5">
                            <h1 class="text-gray-900 font-semibold lg:text-4xl w-[600px]">Rekrutmen jadi lebih efisien dengan WorkSeeker. Cepat dan mudah digunakan!</h1>
                            <h1 class=" mt-5 font-light text-gray-900 text-xl">Dimas - HRD PT. SEMUDAH</h1>
                        </div>
                    </div>
                  
                </div>   
            </div>

            <div class="h-[428.9px]  pt-[120px]">
                <div class=" block">
                    <h1 class="text-gray-900 font-semibold lg:text-4xl w-[600px] mx-auto block text-center">Pasangkan lowongan pekerjaanmu <span class="underline underline-offset-4 text-biru-tuwak">Sekarang!</span></h1>
                    <a href="#"><button class="mx-auto lg:mt-10 min-[300px]:mt-5 min-[300px]:mx-auto min-[300px]:block  rounded-full bg-biru-tuwak py-2 px-5 text-white text-semibold">Pasang Lowongan</button></a>
                </div>
           
            </div>

            <footer class="">
                @include('components.FooterUser')
            </footer>
       
@endsection