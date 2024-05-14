@extends('layouts.GuestLayout')
@section('registerCompany')

    <div class="lg:m-[50px] min-[300px]:m-[10px]">
       <div>
       <h1 class="font-bold text-3xl mb-8">Logo Here</h1>
        <h1 class="font-semibold text-2xl">Daftarkan Perusahaanmu sekarang!</h1>
        <p class="mt-2 ">Bergabung dengan kami dan dapatkan pekerja yang anda inginkan</p>
     

        <div class="lg:flex min-[300px]:block">
            <div class="w-full">
            <h1 class="font-semibold text-2xl mt-10">Informasi Perusahaan</h1>
            <p class="mt-2 ">Silahkan masukkan informasi perusahaan anda</p>
                <form action="" class="mt-5 lg:mr-10 min-[300px]:mr-0">
                    @csrf
                    <label for="" class="text-lg font-semibold">Nama Perusahaan</label>
                    <div>
                        <input type="text" name="company_name" placeholder="Masukkan nama perusahaan" class="py-4 px-5 w-full rounded-md mt-3 mb-5 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10" >
                    </div>
                    <label for="" class="text-lg font-semibold">Nama Penanggung Jawab</label>
                    {{-- <div>
                        <input type="text" placeholder="Masukkan nama penanggung jawab" class="py-4 px-5 w-full rounded-md mt-3 mb-5 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10" >
                    </div> --}}
                    <label for="" class="text-lg font-semibold">Nomor Telepon Penanggung Jawab</label>
                    {{-- <div>
                        <input type="text" name="number_phone" placeholder="Masukkan nomor telepon penanggung jawab" class="py-4 px-5 w-full rounded-md mt-3 mb-5 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10" >
                    </div> --}}
                    <label for="" class="text-lg font-semibold">Nomor Telepon Kantor</label>
                    <p class="text-gray-500">*Jika tidak ada, diisi dengan telepon penanggung jawab</p>
                    <div>
                        <input type="text" name="number_phone" placeholder="Masukkan nomor telepon kantor" class="py-4 px-5 w-full rounded-md mt-3 mb-5 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10" >
                    </div>
                    <label for="" class="text-lg font-semibold">Bidang Perusahaan</label>
                    <div>
                        <select name="category_id" id="" class="py-4 px-5 w-full rounded-md mt-3 mb-5 border-2 ring-2 text-gray-500 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10" >
                            <option value="" >Pilih bidang perusahaan</option>
                            @foreach ($category as $item)
                            <option value="{{ $item->id }}" >{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <label for="" class="text-lg font-semibold">Deskripsi Perusahaan</label>
                    <div>
                        <input id="x" value="Deskripsikan Perusahaan Anda" type="hidden" name="content" class="py-4 px-5 w-full rounded-md mt-0 mb-5  text-gray-500 border-0 ring-0  focus:border-blue-500 outline-none focus:outline-none focus:ring-10">
                        <trix-editor class="mb-5" input="x"></trix-editor>
                    </div>
                    <label for="" class="text-lg font-semibold">Foto Profil Perusahaan</label>
                    <p class="text-gray-500">*Bisa diisi dengan Logo Perusahaan, Gambar Produk, atau Kantor Perusahaan</p>
                    <div>
                        <input type="file" placeholder="Pilih File" class="py-4 px-5 w-full rounded-md mt-0 mb-5  text-black border-0 ring-0  focus:border-blue-500 outline-none focus:outline-none focus:ring-10" >
                        <p class="text-gray-500 mt-[-10px] text-right">Ukuran maksimal : 3MB</p>
                    </div>
                </form>
        </div>

            <div class="w-full lg:ml-8 min-[300px]:ml-0">
                <h1 class="font-semibold text-2xl mt-10">Informasi Akun</h1>
                <p class="mt-2 ">Silahkan masukkan informasi akun anda</p>
                <div class="mt-5">
                <form action="">
                    <div>
                        <label for="" class="text-lg font-semibold">Alamat Email</label>
                        <div>
                            <input type="text" placeholder="example@gmail.com" class="py-4 px-5 w-full rounded-md mt-3 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10" >
                        </div>
                    </div>
                    <div class="mt-[30px]">
                        <label for="" class="text-lg font-semibold">Password</label>
                        <div>
                            <input type="password" placeholder="Minimal 6 karakter" class="py-4 px-5 w-full rounded-md mt-3 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10" >
                        </div>
                    </div>
                </form>
                <button class="mt-10 py-4 w-full rounded-3xl text-white font-semibold" style="background: #003974" type="submit">Daftar</button>
                <p class="text-sm text-center mt-2">Sudah punya akun? <a href="#" style="color: #003974">Masuk</a></p>
            </div>
            </div>
        </div>
        
       </div>
    </div>
     
@endsection