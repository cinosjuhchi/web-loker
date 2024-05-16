@extends('layouts.GuestLayout')
@section('pilihAkun')
    <div class="w-full h-screen">

        <div class="block mt-12 mb-5">
            <img class="size-16 mx-auto" src="{{ Vite::asset('resources/assets/logo3.svg')}}" alt="">
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const card1 = document.getElementById('selectcard1');
            const card2 = document.getElementById('selectcard2');
            const button = document.getElementById('registbtn');
            const registlink = document.getElementById('registlink');

            function handleCardSelect(route) {
                return function() {
                    // Toggle card selection
                    card1.classList.remove('border-blue-500', 'ring-2', 'ring-blue-500');
                    card2.classList.remove('border-blue-500', 'ring-2', 'ring-blue-500');
                    this.classList.add('border-blue-500', 'ring-2', 'ring-blue-500');

                    // Enable button
                    button.classList.remove('bg-DarkWhite', 'cursor-not-allowed');
                    button.classList.add('bg-blue-500', 'cursor-pointer', 'text-white');

                    // Set the href attribute of the link
                    registlink.href = route;
                }
            }

            card1.addEventListener('click', handleCardSelect('{{ route('company.register') }}'));
            card2.addEventListener('click', handleCardSelect('{{ route('user.register') }}'));
        });
    </script>
@endsection
