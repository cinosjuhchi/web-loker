@extends('layouts.DefaultLayout')
@section('detailProfileUser')
    <div class="lg:mx-[70px] mb-10 mx-[15px] mt-5">
        <h1 class="text-2xl font-bold mb-4 mt-9">Detail Pelamar “NamaPekerjaan”</h1>
        <div class="border-t-4 lg:my-10 my-5"></div>
        <div class="">
            <div class="flex flex-col items-center">
                <img src="https://via.placeholder.com/150" alt="Profile Picture" class="w-40 h-40 rounded-full mb-4">
                <div class="flex space-x-4 mb-4">
                    <button class="bg-biru-tuwak text-white px-4 py-2 rounded-full">Lihat CV</button>
                    <button id="reportUser"
                        class="border border-red-800 text-red-800 px-4 py-2 rounded-full">Report</button>
                </div>
            </div>
            <div class="border-t-4 lg:my-10 my-5"></div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <h2 class="">Nama Lengkap</h2>
                    <p class="font-bold">Akhdan Naufal Syahputra</p>
                </div>
                <div>
                    <h2 class="">Email</h2>
                    <p class="font-bold">akhdannaufal@gmail.com</p>
                </div>
                <div>
                    <h2 class="">Nomor Telepon</h2>
                    <p class="font-bold">0811-2222-3333</p>
                </div>
                <div>
                    <h2 class="">Pendidikan Terakhir</h2>
                    <p class="font-bold">Sarjana</p>
                </div>
                <div>
                    <h2 class="">Bidang Keahlian</h2>
                    <p class="font-bold">Programmer, Mobile Developer</p>
                </div>
                <div>
                    <h2 class="">Jenis Kelamin</h2>
                    <p class="font-bold">Laki - laki</p>
                </div>
                <div>
                    <h2 class="">Tanggal Lahir</h2>
                    <p class="font-bold">1-1-2001</p>
                </div>
                <div>
                    <h2 class="">Provinsi Tempat Tinggal</h2>
                    <p class="font-bold">DKI Jakarta</p>
                </div>
            </div>
            <div class="mt-4">
                <h2 class="">Alasan ingin bergabung</h2>
                <p class="font-bold">Untuk menjadi warga negara DKI Jakarta yang baik, sopan dan tidak sombong</p>
            </div>
        </div>
    </div>


    <script>
        document.getElementById('reportUser').addEventListener('click', function() {
            Swal.fire({
                title: "Laporkan Pelamar Ini!",
                
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
        //         title: "Laporkan Pelamar Ini!",
                
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
    </script>
@endsection
