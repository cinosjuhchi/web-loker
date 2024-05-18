@extends('Layouts.DefaultLayout')
@section('ubahloker')
<div class="lg:mx-[70px] mx-[15px] flex mt-10">
    <h1 class="text-3xl font-semibold order-last ml-5">Ubah Lowongan Pekerjaan</h1>
    <a href="/loker-company">
        <svg class="w-12 h-12 text-gray-800 dark:text-white hidden lg:block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
          </svg>
    </a>
</div>
<div class="  lg:mx-[70px] mx-[15px]">
    <div>


        <div class="">
            <div class="">
                <form action="" class="mt-5 lg:flex  w-full gap-5">
                    <div class="lg:flex  w-full gap-5">
                        <div class=" lg:w-[50%]">
                            <label for="nama" class="text-lg font-semibold">Nama Pekerjaan</label>
                            <div>
                                <input id="nama" type="text" placeholder="Masukkan nama lengkap anda"
                                    class="py-4 px-5 w-full rounded-md mt-3 mb-5 text-black border-2 border-DarkWhite placeholder:text-DarkWhite placeholder:focus:text-blue-500 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <label for="telepon" class="text-lg font-semibold">Kategori  Pekerjaan</label>
                            <div>
                                <input id="telepon" type="text" placeholder="Masukkan nomor telpon anda"
                                    class="py-4 px-5 w-full rounded-md mt-3 mb-5 text-black border-2 border-DarkWhite placeholder:text-DarkWhite placeholder:focus:text-blue-500 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            
                            
                            
                        </div>

                        <div class=" lg:w-[50%]">
                            <label for="email" class="text-lg font-semibold">Estimasi Gaji</label>
                            <div>
                                <input id="telepon" type="text" placeholder="Masukkan nomor telpon anda"
                                    class="py-4 px-5 w-full rounded-md mt-3 mb-5 text-black border-2 border-DarkWhite placeholder:text-DarkWhite placeholder:focus:text-blue-500 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <label for="email" class="text-lg font-semibold">Deskripsi Pekerjaan</label>
                            
                            <div>
                                <textarea id="email" type="email" placeholder="contohemail@gmail.com"
                                    class="pb-28 w-full h-36 border-2 border-DarkWhite placeholder:text-DarkWhite placeholder:focus:text-blue-500 text-wrap rounded-md mt-3 text-black ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-2 relative focus:ring-blue-500 overflow-auto scrollbar-hide" ></textarea>
                            </div>
                          

                            <div class="flex gap-3 lg:mt-5 mt-4 mb-10 w-full justify-end">
                                <button
                                    class=" border px-5 border-red-500 hover:bg-red-500 py-2 text-red-500 hover:text-white transition-all duration-300 ease-in-out font-semibold rounded-full">Batal</button>
                                <button id="ubahLowongan" class="px-5  bg-biru-tuwak font-semibold rounded-full text-white ">Kirim</button>
                            </div>
                        </div>
                    </div>



                </form>
            </div>


        </div>
    </div>
</div>



<script>
     document.getElementById('ubahLowongan').addEventListener('click', function() {
                Swal.fire({
                    title: "Lamaran Anda Berhasil Dikirim",
                    text: "Pihak perusahaan akan segera mengkontakmu",
                    icon: "success",
                    timer: 12000
                });
        });

        // kalo gagal
        // document.getElementById('submitLamaranButton').addEventListener('click', function() {
        //         Swal.fire({
        //             title: "Lamaran Anda Tidak Berhasil Dikirim",
        //             text: "Coba beberapa saat lagi",
        //             icon: "error",
        //             timer:12000
        //         });
        // });
</script>

@endsection

