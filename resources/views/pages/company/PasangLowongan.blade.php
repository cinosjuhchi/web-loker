@extends('layouts.DefaultLayout')
@section('pasangLowongan')


<div class="w-full mt-10">
    <div class=" md:mx-[150px] my-4 smaller:mx-5">
        <h1 class="text-3xl font-semibold smaller:text-lg">Pasang Lowongan Pekerjaan</h1>

        <form action="{{ route('company.post.store') }}" method="POST">
        @csrf
        <div class="md:grid md:grid-cols-2 gap-[60px]">
            <div class="my-5">
                <div class="mt-5">
                    <label for="" class="block mb-2 font-semibold text-gray-900">Nama Pekerjaan</label>
                    <input type="text" class="rounded-lg border border-DarkWhite w-full" placeholder="Masukkan Nama Pekerjaan" name="title">
                    @error('title')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <label for="" class="mt-5 block mb-2 font-semibold text-gray-900">Estimasi Gaji</label>
                <div class="flex justify-between gap-4">
                    <div class="max-w-[50%] w-full">
                        <label for="" class="block mb-2 font-medium text-gray-900">Dari :</label>
                        <select type="text" name="min_salary" class="rounded-lg border border-DarkWhite w-full text-gray-500">
                            <option selected class="" id="optionzero">Pilih Estimasi Gaji</option>
                            <option class="" value="100000" id="optionzero">Rp. 100.000</option>
                            <option class="" value="200000" id="optionzero">Rp. 200.000</option>
                            <option class="" value="500000" id="optionzero">Rp. 500.000</option>
                            <option class="" value="1000000" id="optionzero">Rp. 1.000.000</option>
                            <option class="" value="3000000" id="optionzero">Rp. 3.000.000</option>
                            <option class="" value="5000000" id="optionzero">Rp. 5.000.000</option>
                            <option class="" value="10000000" id="optionzero">Rp. 10.000.000</option>
                        </select>
                        @error('min_salary')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    </div>                
                    <div class="max-w-[50%] w-full">
                        <label for="" class="block mb-2 font-medium text-gray-900">Sampai :</label>
                        <select type="text" name="max_salary" class="rounded-lg border border-DarkWhite w-full text-gray-500">
                            <option selected class="" id="optionzero">Pilih Estimasi Gaji</option>
                            <option class="" value="100000" id="optionzero">Rp. 100.000</option>
                            <option class="" value="200000" id="optionzero">Rp. 200.000</option>
                            <option class="" value="500000" id="optionzero">Rp. 500.000</option>
                            <option class="" value="1000000" id="optionzero">Rp. 1.000.000</option>
                            <option class="" value="3000000" id="optionzero">Rp. 3.000.000</option>
                            <option class="" value="5000000" id="optionzero">Rp. 5.000.000</option>
                            <option class="" value="10000000" id="optionzero">Rp. 10.000.000</option>
                        </select>
                        @error('max_salary')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>                
                </div>                
            </div>
            <div class="mt-5">
                <div class="mt-5">
                    <label for="" class="block mb-2 font-semibold text-gray-900">Kategori Pekerjaan</label>
                    <select type="text" name="id_category" class="rounded-lg border border-DarkWhite w-full text-gray-500">
                        <option selected class="" id="optionzero">Pilih kategori pekerjaan</option>
                        @foreach ($category as $item)
                                <option value="{{ $item->id }}" >{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('id_category')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-5">
                    <label for="" class="block mb-2 font-semibold text-gray-900">Deskripsi Pekerjaan</label>
                    <input id="x" name="content" placeholder="Deskripsikan Perusahaan Anda" type="hidden" name="description" class="py-4 px-5 w-full rounded-md mt-0 mb-2   border-0 ring-0  focus:border-blue-500 outline-none focus:outline-none focus:ring-10">
                    <trix-editor class="mb-2 h-40" input="x"></trix-editor>                    
                    @error('content')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

        </div>
        <div class="w-full flex justify-end">

            <button type="submit" id="submitLowongan" class="bg-biru-tuwak px-8 py-2.5 hover:bg-biru-tuwak  transition-all duration-300 ease-in-out text-white  hover:text-white rounded-full my-5">
                Pasang
            </button>
        </div>
        </form>
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