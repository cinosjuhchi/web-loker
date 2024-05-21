@extends('layouts.DefaultLayout')
@section('profileCompany')
<form id="companyForm" method="POST" enctype="multipart/form-data">
    <div class="">
        <div class="relative">
            <img src="{{ $company->photo_banner ? asset($company->photo_banner) : Vite::asset('resources/assets/placeholder.png') }}" alt="Header Image" class="w-full h-64 object-cover"> 
            <input type="file" id="file" name="photo_banner" class="hidden w-full h-16" onchange="displayFileName()"
                disabled>
            <label for="file"
                class=" absolute right-0 top-0 flex p-3 m-5 bg-biru-tuwak rounded-full hover:bg-LightBlue text-center  select-none cursor-pointer  text-white">

                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                    fill="none">
                    <path
                        d="M19.6596 10.7008L21.2949 12.3361L5.19041 28.4406H3.55507V26.8052L19.6596 10.7008ZM26.0587 0C25.6143 0 25.1521 0.177754 24.8144 0.515485L21.5615 3.76838L28.2273 10.4341L31.4802 7.18125C31.645 7.0168 31.7757 6.82147 31.8649 6.60643C31.9541 6.3914 32 6.16088 32 5.92808C32 5.69528 31.9541 5.46477 31.8649 5.24973C31.7757 5.0347 31.645 4.83937 31.4802 4.67492L27.3207 0.515485C26.9652 0.159978 26.5208 0 26.0587 0ZM19.6596 5.67034L0 25.3299V31.9957H6.66576L26.3253 12.3361L19.6596 5.67034Z"
                        fill="white" />
                </svg>

            </label> 
            <div class="absolute inset-x-0 bottom-0 transform translate-y-1/2 flex justify-center ">          
            <img src="{{ $company->photo_profile ? null : Vite::asset('resources/assets/placeholder.png') }}" alt="Profile Picture"
            class="w-32 h-32 rounded-full border-4 border-white object-cover object-center">            
                    <input type="file" id="file" name="photo_profile" class="hidden w-full h-16"
                    onchange="displayFileName()" disabled>
                <label for="file"
                    class=" absolute flex p-10 top-2 rounded-full hover:bg-gray-200 text-center  select-none cursor-pointer  text-white">

                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" class="opacity-0 hover:opacity-100"
                        fill="none">
                        <path
                            d="M19.6596 10.7008L21.2949 12.3361L5.19041 28.4406H3.55507V26.8052L19.6596 10.7008ZM26.0587 0C25.6143 0 25.1521 0.177754 24.8144 0.515485L21.5615 3.76838L28.2273 10.4341L31.4802 7.18125C31.645 7.0168 31.7757 6.82147 31.8649 6.60643C31.9541 6.3914 32 6.16088 32 5.92808C32 5.69528 31.9541 5.46477 31.8649 5.24973C31.7757 5.0347 31.645 4.83937 31.4802 4.67492L27.3207 0.515485C26.9652 0.159978 26.5208 0 26.0587 0ZM19.6596 5.67034L0 25.3299V31.9957H6.66576L26.3253 12.3361L19.6596 5.67034Z"
                            fill="white" />
                    </svg>

                </label>
            </div>

    
                </div>

        <div class="mt-16 text-center">
            <h1 class="text-2xl font-semibold">{{ $company->company_name }}</h1>
        </div>

        <div class="mt-5">
            <div class=" justify-center lg:flex block w-fit mx-auto gap-2">
                <div class="mb-4 lg:mb-0 ">
                    <button class=" bg-biru-tuwak rounded-full focus:ring-0 p-3 border-none text-white">Tambahkan
                        Lowongan</button>

                </div>

                <div class="mb-4 lg:mb-0">
                    <a href="{{ route('company.logout') }}">
                        <button  class="border border-red-800 py-3 lg:px-6 rounded-full text-red-800 px-4 w-full hover:bg-red-800 hover:text-white">Keluar</button>
                    </a>

                </div>
            </div>

        </div>
    </div>

    <div class="lg:mx-[100px] mx-5">
      
        <div class="mb-6">
            <label class="block text-gray-700 font-semibold mb-2 lg:text-2xl" for="description">Deskripsi Perusahaan:</label>
                <input class="border border-gray-300 p-4 rounded-lg bg-gray-100 w-full" 
                id="description" 
                value="{{ $company->description ?? 'Tidak ada deskripsi' }}" 
                disabled>                
                {{-- <button class="mt-2 text-blue-600 hover:underline" type="button" id="enableDescription">Edit</button> --}}
        </div>




        <div class="mb-6">
            <h2 class="text-gray-700 text-2xl  font-semibold mb-4">Informasi data perusahaan</h2>
            
                <div class="lg:flex w-full gap-5">
                    <div class="lg:w-[50%]">
                        <div>
                            <label class="block text-gray-700 mb-2 font-semibold" for="company_name">Nama Perusahaan</label>
                            <input class="w-full p-2 disabled:bg-gray-400 border border-gray-300 rounded-md" type="text" id="company_name"
                                value="{{ $company->company_name }}" disabled>
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2 font-semibold" for="phoneNumber">Nomor Telepon</label>
                            <input class="w-full p-2 border border-gray-300 disabled:bg-gray-400 rounded-md" type="text" id="phoneNumber"
                                value="{{ $company->number_phone }}" name="number_phone" disabled>
                        </div>
                    </div>
    
                    <div class="lg:w-[50%]">
                        <div>
                            <label class="block text-gray-700 mb-2 font-semibold" for="email">Email</label>
                            <input class="w-full p-2 border border-gray-300 disabled:bg-gray-400 rounded-md" type="email" name="company_email" id="email"
                                value="{{ $company->company_email }}" disabled>
                        </div>
    
                        <div>
                            <label class="block text-gray-700 mb-2 font-semibold" for="expertise">Bidang Pekerjaan</label>
                            <select name="category_id" id="" class="w-full p-2 border disabled:bg-gray-400 border-gray-300 rounded-md" disabled>
                                <option value="{{ $company->category->id }}">{{ $company->category->name }}</option>
                                @foreach ($category as $item)                                                            
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                



                <div class="mt-8">
                    <h2 class="text-gray-700 text-2xl xl font-semibold mb-4">Alamat Perusahaan</h2>
                    <div class="w-full lg:flex gap-5 block">
                        <div class="lg:w-[50%] w-full ">
                            <div>
                                <label class="block text-gray-700 mb-2 font-semibold" for="username">Nama Jalan</label>
                                <input class="w-full p-2 border border-gray-300 rounded-md disabled:bg-gray-400" type="text" id="address" name="address"
                                    value="{{ $company->address }}" disabled>
                            </div>                            
                            <div class="md:col-span-2">
                                <label class="block text-gray-700 mb-2 font-semibold" for="province">Provinsi</label>
                                <select class="w-full p-2 border border-gray-300 rounded-md disabled:bg-gray-400" id="province" name="province" disabled>
                                    <option value="{{ $company->province }}" selected>{{ $company->province }}</option>
                                    @foreach ($provinces as $province)                                                                                    
                                        <option value="{{ $province['name'] }}">{{ $province['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            
                        </div>

                        <div class="lg:w-[50%]">                            
                            <div>
                                <label class="block text-gray-700 mb-2 font-semibold" for="code_post">Kode Pos</label>
                                <input class="w-full p-2 border border-gray-300 rounded-md disabled:bg-gray-400" type="number" name="code_post" id="code_post"
                                    placeholder="Masukan Kode Pos Kantor Anda" disabled>
                            </div>
                        </div>
                    </div>
                  
                    
                </div>
               

                <div class="mt-10">
                    <div class="mr-0 lg:flex block mx-auto w-fit gap-2">
                        <div>
                            <button id="ubahDataButton" type="button"
                                class="py-3 lg:px-6 bg-biru-tuwak rounded-full focus:ring-0 p-3 border-none text-white lg:justify-end">Ubah
                                Data</button>
                        </div>
                        <div id="afterClick" class="hidden">
                            <button id="batalButton" type="button" name="batal"
                                class="border border-red-800 py-3 lg:px-6 rounded-full px-4 text-red-800 hover:bg-red-800 hover:text-white">Batal</button>
                            <button type="submit"                
                                class="py-3 lg:px-4 bg-biru-tuwak rounded-full focus:ring-0 px-4 border-none text-white">Ubah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


<script>
    const ubahDataButton = document.getElementById('ubahDataButton');
    const batalButton = document.getElementById('batalButton');
    const afterClick = document.getElementById('afterClick');
    const formElements = document.querySelectorAll('#companyForm input, #companyForm select');

    

    
    ubahDataButton.addEventListener('click', function() {
        console.log(200);
        ubahDataButton.style.display = 'none';
        afterClick.classList.remove('hidden');
        formElements.forEach(element => {
            element.removeAttribute('disabled');
        });
    });
    

    batalButton.addEventListener('click', function() {
        formElements.forEach(element => {
            element.setAttribute('readonly', 'true');
        });
        afterClick.classList.add('hidden');
        ubahDataButton.style.display = 'block';
    });
    function displayFileName() {
        const fileInput = document.getElementById('file');
        const fileName = fileInput.files[0]?.name;
        const filePreview = document.getElementById('file-preview');
        
    }
</script>

@endsection
