@extends('layouts.DefaultLayout')
@section('pasangLowongan')


<div class="w-full mt-10">
    <div class=" md:mx-[150px] my-4 smaller:mx-5">
        <h1 class="text-3xl font-semibold smaller:text-lg">Pasang Lowongan Pekerjaan</h1>

        <div class="md:grid md:grid-cols-2 gap-[60px]">
            <div class="my-5">
                <div class="mt-5">
                    <label for="" class="block mb-2 font-semibold text-gray-900">Nama Pekerjaan</label>
                    <input type="text" class="rounded-lg border border-DarkWhite w-full" placeholder="Masukkan Nama Pekerjaan">
                </div>
                <div class="mt-5">
                    <label for="" class="block mb-2 font-semibold text-gray-900">Estimasi Gaji</label>
                    <select type="text" class="rounded-lg border border-DarkWhite w-full text-gray-500">
                        <option selected class="" id="optionzero">Pilih Estimasi Gaji</option>
                    </select>
                </div>
            </div>
            <div class="mt-5">
                <div class="mt-5">
                    <label for="" class="block mb-2 font-semibold text-gray-900">Kategori Pekerjaan</label>
                    <select type="text" class="rounded-lg border border-DarkWhite w-full text-gray-500">
                        <option selected class="" id="optionzero">Pilih kategori pekerjaan</option>
                    </select>
                </div>
                <div class="mt-5">
                    <label for="" class="block mb-2 font-semibold text-gray-900">Deskripsi Pekerjaan</label>
                    <input type="text" class="rounded-lg border relative border-DarkWhite w-full h-[150px] smaller:h-[125px] placeholder:absolute placeholder:top-3 placeholder:left-3 p-3" placeholder="Masukkan deskripsi pekerjaan">
                </div>
            </div>

        </div>
        <div class="w-full flex justify-end">

            <button type="submit" id="submitLowongan" class="bg-biru-tuwak px-8 py-2.5 hover:bg-biru-tuwak  transition-all duration-300 ease-in-out text-white  hover:text-white rounded-full my-5">
                Pasang
            </button>
        </div>
    </div>
</div>

<script>
    const optionzero = document.getElementById('optionzero');

    document.getElementById('submitLowongan').addEventListener('click', function() {
                Swal.fire({
                    title: "Lowongan anda berhasil dikirim",
                    text: "Pekerja akan menemukan lowongan yang sudah dikirim",
                    icon: "success",
                    timer: 12000
                });
    });

    // kalo gagal
    // document.getElementById('submitLowongan').addEventListener('click', function() {
    //             Swal.fire({
    //                 title: "Lowongan anda tidak berhasil dikirim",
    //                 text: "Coba beberapa saat lagi",
    //                 icon: "error",
    //                 timer: 12000
    //             });
    // });

</script>

@endsection