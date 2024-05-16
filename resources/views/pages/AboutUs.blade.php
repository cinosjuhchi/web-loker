@extends('layouts.GuestLayout')
@section('aboutUs')
    <nav>
        @include('components.NavbarUser')
    </nav>

    <div class="lg:mx-[70px] min-[300px]:mx-10 flex lg:mt-24 min-[300px]:mt-10">
        <div class="lg:w-[50%] min-[300px]:w-full lg:my-auto">
            <h1 class="font-bold lg:text-5xl min-[300px]:text-3xl ">Mengenal WorkSeeker</h1>
        <p class="mt-5 lg:text-2xl min-[300px]:text-md">WorkSeeker adalah platform yang menghubungkan pencari kerja dengan perusahaan. Pencari kerja dapat menemukan lowongan, membuat profil, dan menerima pemberitahuan, sementara perusahaan dapat memposting  lowongan dan mencari kandidat.
        </p>
        </div>
        
        <div class="w-[50%] lg:block min-[300px]:hidden">
        <img src="{{ Vite::asset('resources/assets/Rectangle 26.svg') }}" alt="" class="h-100 "  >
        </div>
    </div>

    <div class="min-[300px]:mx-10 lg:mt-24 min-[300px]:mt-10  h-fit">
        <h1 class="font-bold lg:text-5xl min-[300px]:text-3xl lg:text-center ">
            Mengapa anda harus memilih WorkSeeker?
        </h1>
        <div class="w-full flex justify-center mt-5  h-fit ">
            <img src="{{ Vite::asset('resources/assets/gambar 2.svg') }}" alt="" class="bg-cover  lg:w-[80%] min-[300px]:pt-0">
        </div>
    </div>
    

    <div class="lg:mt-28 min-[300px]:mt-10 min-[300px]:mx-10">
        <div class="justify-center w-full lg:flex min-[300px]:block gap-10 ">
            <div>
                <a href="#" class="block lg:w-[600px] min-[300px]:w-full p-5 bg-blue-300 border mb-2  rounded-lg ">
                <img src="{{ Vite::asset('resources/assets/satu.svg') }}" alt="" class="flex mx-auto ">
                    <p class="font-semibold text-center mt-5 lg:text-2xl min-[300px]:text-xl">WorkSeeker menyediakan berbagai macam <br> lowongan pekerjaan dari berbagai industri <br> dan tingkat pengalaman. </p>
                </a>
            </div>
            <div>
                <a href="#" class="block lg:w-[600px] min-[300px]:w-full p-5 bg-blue-300 border mb-2  rounded-lg">
                <img src="{{ Vite::asset('resources/assets/dua.svg') }}" alt="" class="flex mx-auto">
                    <p class="font-semibold text-center mt-5 lg:text-2xl min-[300px]:text-xl">WorkSeeker memiliki fitur pencarian yang canggih, memungkinkan Anda untuk memfilter lowongan berdasarkan lokasi, industri, gaji, dll. </p>
                </a>
            </div>
        </div>

        <div class="flex gap-10 mb-20 lg:mt-[60px] lg:flex min-[300px]:block justify-center w-full">
            <div>
                 <a href="#" class="block lg:w-[600px] min-[300px]:w-full p-5 bg-blue-300 border mb-2  rounded-lg">
                     <img src="{{ Vite::asset('resources/assets/tiga.svg') }}" alt="" class="flex mx-auto">
                     <p class="font-semibold text-center mt-5 lg:text-2xl min-[300px]:text-xl">Anda dapat membuat profil profesional yang lengkap dan menarik di WorkSeeker.</p>
                 </a>
            </div>
            <div>
                 <a href="#" class="block lg:w-[600px] min-[300px]:w-full p-5 bg-blue-300 border mb-2  rounded-lg ">
                     <img src="{{ Vite::asset('resources/assets/empat.svg') }}" alt="" class="flex mx-auto">
                     <p class="font-semibold text-center mt-5 lg:text-2xl min-[300px]:text-xl">Dengan WorkSeeker, proses melamar pekerjaan menjadi lebih mudah dan cepat.</p>
                 </a>
            </div>
         </div>

    </div>
 

   

    
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


    <footer class="">
        @include('components.FooterUser')
    </footer>
@endsection