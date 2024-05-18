@extends('layouts.DefaultLayout')
@section('uploadLamaran')
    <div class="m-4 md:m-12">
        <div>

            <h1 class="font-bold text-2xl md:text-3xl mb-8">Lamar Pekerjaan "NamaPekerjaan" di "NamaPerusahan"</h1>

            <div class="">
                <div class="">
                    <form action="" class="mt-5 lg:flex  w-full gap-5">
                        <div class="lg:flex  w-full gap-5">
                            <div class=" lg:w-[50%]">
                                <label for="nama" class="text-lg font-semibold">Nama lengkap</label>
                                <div>
                                    <input id="nama" type="text" placeholder="Masukkan nama lengkap anda"
                                        class="py-4 px-5 w-full rounded-md mt-3 mb-5 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                                <label for="telepon" class="text-lg font-semibold">Nomor Telepon</label>
                                <div>
                                    <input id="telepon" type="text" placeholder="Masukkan nomor telpon anda"
                                        class="py-4 px-5 w-full rounded-md mt-3 mb-5 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                                <label for="" class="text-lg font-semibold">Alasan Anda Ingin Bergabung</label>
                                <div class="mb-5">
                                    <input id="x" placeholder="Tuliskan Alasan Anda Ingin Bergabung" type="hidden"
                                        name="description"
                                        class="py-4 px-5 w-full rounded-md mt-0 mb-2   border-0 ring-0  focus:border-blue-500 outline-none focus:outline-none focus:ring-10">
                                    <trix-editor class="mb-2" input="x"></trix-editor>
                                </div>
                            </div>

                            <div class=" lg:w-[50%]">
                                <label for="email" class="text-lg font-semibold">Email</label>
                                <div>
                                    <input id="email" type="email" placeholder="contohemail@gmail.com"
                                        class="py-4 px-5 w-full rounded-md mt-3 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                                <div class="mt-5">
                                    <label for="cv" class="text-lg font-semibold">CV</label>
                                    <input type="file" id="file-input" accept=”.jpg, .jpeg, .png” name="photo_profile"
                                        placeholder="Pilih File"
                                        class=" w-full  mt-5 mb-5  text-black border-0 ring-0  focus:border-blue-500 outline-none focus:outline-none focus:ring-10">
                                </div>

                                <div class="flex gap-3 lg:mt-5 mt-4 mb-10 w-full justify-end">
                                    <button
                                        class=" border px-5 border-biru-tuwak py-2 text-biru-tuwak font-semibold rounded-full">Batal</button>
                                    <button id="submitLamaranButton" class="px-5  bg-biru-tuwak font-semibold rounded-full text-white ">Kirim</button>
                                </div>
                            </div>
                        </div>



                    </form>
                </div>


            </div>
        </div>
    </div>

    <script>
        document.getElementById('submitLamaranButton').addEventListener('click', function() {
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
