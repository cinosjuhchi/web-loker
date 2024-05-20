@extends('layouts.GuestLayout')
@section('registerCompany')

    <div class="lg:m-[50px] m-[10px]">
       <div>
       
        <div class="flex items-center">
            <img class="h-14" src="{{ Vite::asset("resources/assets/logo/logo_outline_text_none.png") }}" alt="image description">
            <h2 class="text-5xl font-bold text-blue-700 font-JakartaSans">Work<span class="text-yellow-300">Seeker</span></h2>
        </div>

        <h1 class="font-semibold text-2xl">Daftarkan Perusahaanmu sekarang!</h1>
        <p class="mt-2">Bergabung dengan kami dan dapatkan pekerja yang anda inginkan</p>
     

        <form action="{{ route('company.register.post') }}" enctype="multipart/form-data" method="POST" class="mt-5 lg:mr-10 mr-0">
            @csrf
            <div class="lg:flex block">
                <div class="w-full">
                <h1 class="font-semibold text-2xl mt-10">Informasi Perusahaan</h1>
                <p class="mt-2 mb-4">Silahkan masukkan informasi perusahaan anda</p>
                        <label for="" class="text-lg font-semibold">Nama Perusahaan</label>
                        <div class="mb-5">
                            <input type="text" name="company_name" placeholder="Masukkan nama perusahaan" class="py-4 px-5 w-full rounded-md mt-3 mb-2 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10">
                            @error('company_name')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <label for="" class="text-lg font-semibold">Provinsi</label>
                        <div class="mb-5">
                            <select name="province" id="province" class="py-4 px-5 w-full rounded-md mt-3 mb-2 border-2 ring-2 text-gray-500 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10">
                                <option value="">Pilih Provinsi</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province['name'] }}">{{ $province['name'] }}</option>
                                @endforeach
                            </select>
                            @error('province')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <label for="" class="text-lg font-semibold">Alamat</label>
                        <div class="mb-5">
                            <input type="text" name="address" placeholder="Masukkan Alamat Perusahaan" class="py-4 px-5 w-full rounded-md mt-3 mb-2 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10" >
                            @error('address')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- <label for="" class="text-lg font-semibold">Nomor Telepon Penanggung Jawab</label>
                        <div>
                            <input type="text" name="number_phone" placeholder="Masukkan nomor telepon penanggung jawab" class="py-4 px-5 w-full rounded-md mt-3 mb-2 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10" >
                        </div> --}}
                        <label for="" class="text-lg font-semibold">Nomor Telepon Kantor</label>
                       
                        <div class="mb-5 flex items-center">
                            <button id="dropdown-phone-button" data-dropdown-toggle="dropdown-phone" class="py-4 px-3 flex-shrink-0 z-10 inline-flex items-center rounded-md text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10" type="button">                                
                            +1 <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/></svg>
                            </button>
                            <div id="dropdown-phone" class="z-10 hidden bg-white divide-y rounded-lg shadow w-52 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-phone-button">
                                    @foreach ($phoneCodes as $code)
                                    <li>
                                        <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                            <span class="inline-flex items-center">                                                
                                                {{ $code['name'] }} ({{ $code['dial_code'] }})
                                            </span>
                                        </button>
                                    </li>                                        
                                    @endforeach                                    
                                </ul>
                            </div>
                            <input type="text" name="number_phone" placeholder="Masukkan nomor telepon kantor" class="py-4 px-5 w-full rounded-md mt-3 mb-2 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10" >
                            @error('number_phone')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        >
                        <label for="" class="text-lg font-semibold">Bidang Perusahaan</label>
                        <div class="mb-5">
                            <select name="category_id" id="" class="py-4 px-5 w-full rounded-md mt-3 mb-2 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10" >
                                <option value="" >Pilih bidang perusahaan</option>
                                @foreach ($category as $item)
                                <option value="{{ $item->id }}" >{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <label for="" class="text-lg font-semibold">Deskripsi Perusahaan</label>
                        <div class="mb-5">
                            <input id="x" placeholder="Deskripsikan Perusahaan Anda" type="hidden" name="description" class="py-4 px-5 w-full rounded-md mt-0 mb-2   border-0 ring-0  focus:border-blue-500 outline-none focus:outline-none focus:ring-10">
                            <trix-editor class="mb-2" input="x"></trix-editor>
                        </div>
                        <label for="" class="text-lg font-semibold">Foto Profil Perusahaan</label>
                        <p class="text-gray-500">*Bisa diisi dengan Logo Perusahaan, Gambar Produk, atau Kantor Perusahaan</p>
                        <div class="mb-5">
                            <input type="file" id="file-input" accept=”.jpg, .jpeg, .png” name="photo_profile" placeholder="Pilih File" class=" w-full  mt-0 mb-5  text-black border-0 ring-0  focus:border-blue-500 outline-none focus:outline-none focus:ring-10" >
                            <img class="h-40 w-40 object-cover mb-4 object-center" src="{{ Vite::asset('resources/assets/placeholder.png') }}" id="file-preview" alt="image description">
                            <p class="text-gray-500 mt-[-10px]">Ukuran maksimal : 3MB</p>                            
                            @error('photo_profile')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

            <div class="w-full lg:ml-8 ml-0">
                <h1 class="font-semibold text-2xl mt-10">Informasi Akun</h1>
                <p class="mt-2 mb-4">Silahkan masukkan informasi akun anda</p>
                <div class="">                
                    <div class="mb-5">
                        <label for="" class="text-lg font-semibold">Alamat Email</label>
                        <div>
                            <input type="text" name="company_email" placeholder="example@gmail.com" class="mb-2 py-4 px-5 w-full rounded-md mt-3 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10" >
                            @error('company_email')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="" class="text-lg font-semibold">Password</label>
                        <div>                        
                            <input type="password" name="password" placeholder="Minimal 6 karakter" class="py-4 mb-2 px-5 w-full rounded-md mt-3 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10" >
                            @error('password')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="mt-10 py-4 w-full rounded-3xl text-white font-semibold" style="background: #003974" type="submit">Daftar</button>
                    <p class="text-sm text-center mt-2">Sudah punya akun? <a href="{{ route('company.login') }}" style="color: #003974">Masuk</a></p>
                </div>
            </div>
        </form>
        </div>
        
       </div>
    </div>

    <script>
        const input = document.getElementById('file-input');
        const previewPhoto = () => {
            const file = input.files;
            if (file) {
                const fileReader = new FileReader();
                const preview = document.getElementById('file-preview');
        fileReader.onload = function (event) {
                    preview.setAttribute('src', event.target.result);
                }
                fileReader.readAsDataURL(file[0]);
            }
        }
        input.addEventListener("change", previewPhoto);
    </script>
     
@endsection