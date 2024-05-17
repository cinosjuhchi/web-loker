@extends('layouts.DefaultLayout')
@section('detailPerusahaanUserPage')
    <div class="">
        <div class="relative">
            <img src="https://via.placeholder.com/1200x400" alt="Header Image" class="w-full h-64 object-cover">

            <div class="absolute inset-x-0 bottom-0 transform translate-y-1/2 flex justify-center ">
                <img src="https://via.placeholder.com/150" alt="Profile Picture"
                    class="w-32 h-32 rounded-full border-4 border-white">
            </div>
        </div>

        <div class="mt-16 text-center">
            <h1 class="text-2xl font-semibold">Nama Perusahaan</h1>
            <h1 class="text-md font-light">Deskripsi awakwlka</h1>
        </div>

        <div class="mt-5">
            <div class=" justify-center lg:flex block w-fit mx-auto gap-2">
                <div class="mb-4 lg:mb-0 ">
                    <a href="">   <button
                        class="py-3 lg:px-4 bg-biru-tuwak rounded-full focus:ring-0 px-4 border-none text-white">Lihat Lowongan Keja</button></a>
                 
                </div>

                <div class="mb-4 lg:mb-0">
                    <button
                        class="border border-red-800 py-3 lg:px-6 rounded-full text-red-800 px-4 w-full hover:bg-red-800 hover:text-white">Laporkan</button>

                </div>
            </div>

        </div>
    </div>

    <div class="lg:mx-[100px] mx-5 mb-5">
       <div class="border-t-4 my-10 "></div>
        <div>
            <h1 class="font-bold text-2xl mb-10">Tentang Perusahaan</h1>

            <div class="mb-4">
                <p class="text-gray-700 text-md">Nama Perusahaan</p>
                <h3 class="text-xl font-semibold">PT. Alfamart </h3> 
            </div>
            <div class="mb-4">
                <p class="text-gray-700 text-md">Bidang Perusahaan</p>
                <h3 class="text-xl font-semibold">Retail</h3> 
            </div>
            <div class="mb-4">
                <p class="text-gray-700 text-md">Alamat Perusahaan</p>
                <h3 class="text-xl font-semibold">Jl. Sungai Bambu Kel No.1A, RT.9/RW.8, Sungai Bambu, Kec. Tj. Priok, Jkt Utara, Daerah Khusus Ibukota Jakarta 14330</h3> 
            </div>
            <div class="mb-2">
                <p class="text-gray-700 text-md">Deskripsi Perusahaan</p>
                <h3 class="text-xl font-semibold">Sejarah Alfamart dimulai pada tahun 1989 oleh Djoko Susanto dan mengawali usaha di bidang perdagangan dan distribusi. Pada tahun 1999, Perseroan merambah ke sektor minimarket. Alfamart menyediakan barang-barang kebutuhan pokok dengan harga yang terjangkau.</h3> 
            </div>
            
        </div>


    </div>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const ubahDataButton = document.getElementById("ubahDataButton");
            const afterClick = document.getElementById("afterClick");

            ubahDataButton.addEventListener("click", function() {
                afterClick.classList.toggle("hidden");
                ubahDataButton.classList.toggle("hidden");
            });
        });


        document.getElementById("status").addEventListener("change", function() {
            var selectBox = document.getElementById("status");
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
            var selectElement = document.getElementById("status");

            if (selectedValue === "terbuka") {
                selectElement.classList.remove("bg-red-800");
                selectElement.classList.add("bg-biru-tuwak");
            } else if (selectedValue === "tidak") {
                selectElement.classList.remove("bg-biru-tuwak");
                selectElement.classList.add("bg-red-800");
            }
        });
    </script>
@endsection
