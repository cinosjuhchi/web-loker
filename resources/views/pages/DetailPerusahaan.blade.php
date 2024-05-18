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
                    <a href="#lowongan-tersedia">   <button
                        class="py-3 lg:px-4 bg-biru-tuwak rounded-full focus:ring-0 px-4 border-none text-white">Lihat Lowongan Keja</button></a>
                 
                </div>

                <div class="mb-4 lg:mb-0">
                    <button id="reportUser"
                        class="border border-red-800 py-3 lg:px-6 rounded-full text-red-800 px-4 w-full hover:bg-red-800 hover:text-white">Laporkan</button>

                </div>
            </div>

        </div>
    </div>

    <div class="lg:mx-[100px] mx-5 mb-5">
       <div class="border-t-4 my-10 "></div>
        <div>
            <h1 class="font-bold text-2xl mb-5">Tentang Perusahaan</h1>

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
            <div class="mb-10">
                <p class="text-gray-700 text-md">Deskripsi Perusahaan</p>
                <h3 class="text-xl font-semibold">Sejarah Alfamart dimulai pada tahun 1989 oleh Djoko Susanto dan mengawali usaha di bidang perdagangan dan distribusi. Pada tahun 1999, Perseroan merambah ke sektor minimarket. Alfamart menyediakan barang-barang kebutuhan pokok dengan harga yang terjangkau.</h3> 
            </div>
            

            <h1 class="font-bold text-2xl mb-5">Kontak Perusahaan</h1>
            <div class="mb-10">
                <div class="flex gap-4">
                    <svg class="w-8 h-8 text-biru-tuwak dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/>
                      </svg>
                      <h3 class="text-md underline underline-offset-4 text-biru-tuwak font-semibold">emailperusahaan@gmail.com</h3> 
                </div>
                <div class="flex gap-4 mt-4">
                    <svg class="w-8 h-8 text-biru-tuwak dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"/>
                      </svg>
                      
                      <h3 class="text-md underline underline-offset-4 text-biru-tuwak font-semibold">08128-9829-8245</h3> 
                </div>
            </div>

            <div id="lowongan-tersedia">
                <h1 class="font-bold text-2xl mb-5">Lowongan Kerja Yang Tersedia</h1>

                <div class="mt-5 mb-20">
                    @include('components/card.cardLowongan')
                </div>
            </div>
        </div>


    </div>



    <script>
        document.getElementById('reportUser').addEventListener('click', function() {
            Swal.fire({
                title: "Laporkan Perusahaan Ini!",
                
                html: `
                  <div class="justify-start ">
                    <p class="text-left">Alasan</p>
                    <div class="justify-start flex flex-col mt-3">
                       
                        <div class="flex gap-1">
                        <input type="radio" id="reason1" name="reason" value="spam" class="">
                        <label for="reason1" class="text-start">Saya rasa ini spam </label><br>
                        </div>
                        <div class="flex gap-1">
                        <input type="radio" id="reason1" name="reason" value="spam" class="">
                        <label for="reason1" class="text-start">Saya rasa ini diskriminasi</label><br>
                        </div>
                        <div class="flex gap-1">
                        <input type="radio" id="reason1" name="reason" value="spam" class="">
                        <label for="reason1" class="text-start">Saya rasa ini penipuan</label><br>
                        </div>
                        <div class="flex gap-1">
                        <input type="radio" id="reason1" name="reason" value="spam" class="">
                        <label for="reason1" class="text-start">Saya rasa ini seperti rusak atau salah informasi</label><br>
                        </div>
                        
                    </div>
                  </div>
                `,              
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Kirim Laporan",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Laporan anda berhasil dikirim",
                        text: "Admin akan segera mengatasi masalah ini",
                        icon: "success"
                    });
                }
            });
        });

        // kalo gagal
        // document.getElementById('reportUser').addEventListener('click', function() {
        //     Swal.fire({
        //         title: "Laporkan Perusahaan Ini!",
                
        //         html: `
        //           <div class="justify-start ">
        //             <p class="text-left">Alasan</p>
        //             <div class="justify-start flex flex-col mt-3">
                       
        //                 <div class="flex gap-1">
        //                 <input type="radio" id="reason1" name="reason" value="spam" class="">
        //                 <label for="reason1" class="text-start">Saya rasa ini spam </label><br>
        //                 </div>
        //                 <div class="flex gap-1">
        //                 <input type="radio" id="reason1" name="reason" value="spam" class="">
        //                 <label for="reason1" class="text-start">Saya rasa ini diskriminasi</label><br>
        //                 </div>
        //                 <div class="flex gap-1">
        //                 <input type="radio" id="reason1" name="reason" value="spam" class="">
        //                 <label for="reason1" class="text-start">Saya rasa ini penipuan</label><br>
        //                 </div>
        //                 <div class="flex gap-1">
        //                 <input type="radio" id="reason1" name="reason" value="spam" class="">
        //                 <label for="reason1" class="text-start">Saya rasa ini seperti rusak atau salah informasi</label><br>
        //                 </div>
                        
        //             </div>
        //           </div>
        //         `,              
        //         icon: "warning",
        //         showCancelButton: true,
        //         confirmButtonColor: "#3085d6",
        //         cancelButtonColor: "#d33",
        //         confirmButtonText: "Kirim Laporan",
        //         cancelButtonText: "Batal"
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             Swal.fire({
        //                 title: "Laporan tidak berhasil dikirim",
        //                 text: "Coba beberapa saat lagi",
        //                 icon: "error"
        //             });
        //         }
        //     });
        // });
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
