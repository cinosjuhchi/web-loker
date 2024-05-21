@extends('layouts.DefaultLayout')

@section('profileUser')
    <form id="userForm">
        @csrf
        <div class="">
            <div class="relative">
                <img src="{{ optional(auth()->user())->photo_banner ? asset(optional(auth()->user())->photo_banner) : asset('resources/assets/placeholder.png') }}"
                    alt="Header Image" id="banner" class="w-full h-64 object-cover">
                <input type="file" id="file-banner" name="file-banner" class="hidden w-full h-16"
                    onchange="displayPreviewBanner()" disabled>
                <label id="edit-banner" for="file-banner"
                    class=" absolute right-0 top-0 flex p-3 m-5 bg-gray-300 rounded-full hover:bg-LightBlue text-center  select-none cursor-pointer  text-white">

                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                        fill="none">
                        <path
                            d="M19.6596 10.7008L21.2949 12.3361L5.19041 28.4406H3.55507V26.8052L19.6596 10.7008ZM26.0587 0C25.6143 0 25.1521 0.177754 24.8144 0.515485L21.5615 3.76838L28.2273 10.4341L31.4802 7.18125C31.645 7.0168 31.7757 6.82147 31.8649 6.60643C31.9541 6.3914 32 6.16088 32 5.92808C32 5.69528 31.9541 5.46477 31.8649 5.24973C31.7757 5.0347 31.645 4.83937 31.4802 4.67492L27.3207 0.515485C26.9652 0.159978 26.5208 0 26.0587 0ZM19.6596 5.67034L0 25.3299V31.9957H6.66576L26.3253 12.3361L19.6596 5.67034Z"
                            fill="white" />
                    </svg>

                </label>
                <div class="absolute inset-x-0 bottom-0 transform translate-y-1/2 flex justify-center ">
                    <img src="{{ optional(auth()->user())->photo ? asset(optional(auth()->user())->photo) : asset('resources/assets/placeholder.png') }}"
                        alt="Profile Picture" id="PP"
                        class="w-32 h-32 rounded-full border-4 border-white object-cover object-center">
                    <input type="file" id="file-PP" disabled name="file-PP" class="hidden w-full h-16"
                        onchange="displayPreviewPP()">
                    <label id="edit-profile" for="file-PP"
                        class=" absolute flex p-10 top-2 rounded-full hover:bg-gray-300 text-center  select-none cursor-pointer  text-white">

                        <svg id="icon-edit-profile" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                            viewBox="0 0 32 32" class="opacity-0" fill="none">
                            <path
                                d="M19.6596 10.7008L21.2949 12.3361L5.19041 28.4406H3.55507V26.8052L19.6596 10.7008ZM26.0587 0C25.6143 0 25.1521 0.177754 24.8144 0.515485L21.5615 3.76838L28.2273 10.4341L31.4802 7.18125C31.645 7.0168 31.7757 6.82147 31.8649 6.60643C31.9541 6.3914 32 6.16088 32 5.92808C32 5.69528 31.9541 5.46477 31.8649 5.24973C31.7757 5.0347 31.645 4.83937 31.4802 4.67492L27.3207 0.515485C26.9652 0.159978 26.5208 0 26.0587 0ZM19.6596 5.67034L0 25.3299V31.9957H6.66576L26.3253 12.3361L19.6596 5.67034Z"
                                fill="white" />
                        </svg>

                    </label>
                </div>
            </div>

            <div class="mt-16 text-center">
                <h1 class="text-2xl font-semibold">Username</h1>
            </div>

            <div class="mt-5">
                <div class="justify-center lg:flex block w-fit mx-auto gap-2">
                    <div class="mb-4 lg:mb-0 ">
                        <select name="" id="status"
                            class="bg-biru-tuwak rounded-full focus:ring-0 p-3 border-none text-white" readonly>
                            <option value="terbuka" class="bg-white text-black">Terbuka Untuk Kerja</option>
                            <option value="tidak" class="bg-white text-black">Tidak Mencari Pekerjaan</option>
                        </select>
                    </div>

                    <div class="mb-4 lg:mb-0">
                        <button type="button"
                            class="border border-red-800 py-3 lg:px-6 rounded-full text-red-800 px-4 w-full hover:bg-red-800 hover:text-white">Keluar</button>
                    </div>
                </div>
            </div>

        </div>

        <div class="lg:mx-[100px] mx-5">
            <div class="mb-6">
                <label class="block lg:text-2xl text-gray-700 font-semibold mb-2" for="description">Deskripsi diri
                    anda:</label>
                <input class="border border-gray-300 p-4 rounded-lg bg-gray-100 w-full" placeholder="jakjdkjdkjekkmkjakmea"
                    readonly>

                </input>
            </div>

            <div class="mb-6">
                <label class="block text-2xl text-gray-700 font-semibold mb-2" for="uploadCV">Upload CV anda:</label>
                <div class="border-2 border-dashed border-gray-300 p-6 text-center rounded-lg bg-gray-50">
                    <p class="mb-2 text-gray-500">File dapat berbentuk pdf, docx</p>
                    <p class="text-gray-500">Ukuran maksimal 3MB</p>
                    <div class="mt-4">
                        <input type="file" id="file" name="file" class="hidden" onchange="displayFileName()"
                            readonly>
                        <label for="file"
                            class="flex items-center text-base mx-auto bg-biru-tuwak w-[160px] hover:bg-LightBlue text-center px-5 py-2 select-none cursor-pointer rounded-2xl text-white">
                            <i class='bx bx-cloud-upload text-2xl'></i>
                            <span class="mx-auto">Add File</span>
                        </label>
                    </div>
                    <div id="file-preview" class="mt-4 text-gray-500"></div>
                </div>
            </div>


            <div class="mb-6">
                <h2 class="text-gray-700 font-semibold mb-4 text-2xl">Informasi data diri anda</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 mb-2 font-semibold" for="username">Username</label>
                        <input class="w-full p-2 border border-gray-300 rounded-md" type="text" id="username"
                            placeholder="Username Kamu" readonly>
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2 font-semibold" for="fullName">Nama</label>
                        <input class="w-full p-2 border border-gray-300 rounded-md" type="text" id="fullName"
                            placeholder="Azka" readonly>
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2 font-semibold" for="email">Email</label>
                        <input class="w-full p-2 border border-gray-300 rounded-md" type="email" id="email"
                            placeholder="azka@gmail.com" readonly>
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2 font-semibold" for="phoneNumber">Nomor Telepon</label>
                        <input class="w-full p-2 border border-gray-300 rounded-md" type="text" id="phoneNumber"
                            placeholder="0812-9292-8245" readonly>
                    </div>

                    
                    <div x-data="{ open: false }" @click.away="open = false" class="relative">
                        <!-- Trigger -->
                        <p class="block text-gray-700 mb-2 font-semibold">Keahlian</p>
                        <button @click="open = !open" type="button"
                            class="px-4 py-2 flex items-center w-full justify-between bg-white rounded-md border border-gray-300 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            Pilih Bidang Keahlian
                            <!-- Icon -->
                            <svg :class="{ 'rotate-180': open }" class="w-4 h-4 ml-2 transform transition-transform"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <!-- Dropdown Body -->
                        <div x-show="open" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                            class="absolute z-50 mt-2 w-full rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                            <div class="py-1 overflow-y-scroll h-[200px]">
                                <!-- Options -->
                                    <label
                                        class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <input type="checkbox" name="programming" value="Programming"
                                            class="mr-3 text-sidebarunj border-gray-300 rounded focus:ring-sidebarunj">
                                        Programming
                                    </label>
                                    <label class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <input type="checkbox" name="" value="Pemrograman dan Pengembangan Software" class="mr-3 text-sidebarunj border-gray-300 rounded focus:ring-sidebarunj">
                                        Pemrograman dan Pengembangan Software
                                    </label>
                                    <label class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <input type="checkbox" name="" value="" class="mr-3 text-sidebarunj border-gray-300 rounded focus:ring-sidebarunj">
                                        Jaringan dan Keamanan Siber
                                    </label>
                                    <label class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <input type="checkbox" name="" value="" class="mr-3 text-sidebarunj border-gray-300 rounded focus:ring-sidebarunj">
                                        Desain Grafis dan Multimedia
                                    </label>
                                    <label class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <input type="checkbox" name="" value="" class="mr-3 text-sidebarunj border-gray-300 rounded focus:ring-sidebarunj">
                                        Manajemen Proyek
                                    </label>
                                    <label class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <input type="checkbox" name="" value="" class="mr-3 text-sidebarunj border-gray-300 rounded focus:ring-sidebarunj">
                                        Copywriting
                                    </label>
                                    <label class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <input type="checkbox" name="" value="" class="mr-3 text-sidebarunj border-gray-300 rounded focus:ring-sidebarunj">
                                        Analisis keuangan dan perencanaan
                                    </label>
                                    <label class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <input type="checkbox" name="" value="" class="mr-3 text-sidebarunj border-gray-300 rounded focus:ring-sidebarunj">
                                        Pajak dan audit
                                    </label>
                                    <label class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <input type="checkbox" name="" value="" class="mr-3 text-sidebarunj border-gray-300 rounded focus:ring-sidebarunj">
                                        Investasi dan manajemen portofolio
                                    </label>
                                    <label class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <input type="checkbox" name="" value="" class="mr-3 text-sidebarunj border-gray-300 rounded focus:ring-sidebarunj">
                                        Manajemen hubungan pelanggan (CRM)
                                    </label>
                                    <label class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <input type="checkbox" name="" value="" class="mr-3 text-sidebarunj border-gray-300 rounded focus:ring-sidebarunj">
                                        Penjualan langsung dan teknik closing
                                    </label>
                                    <label class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <input type="checkbox" name="" value="" class="mr-3 text-sidebarunj border-gray-300 rounded focus:ring-sidebarunj">
                                        Riset pasar dan analisis kompetitor
                                    </label>
                                    <label class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <input type="checkbox" name="" value="" class="mr-3 text-sidebarunj border-gray-300 rounded focus:ring-sidebarunj">
                                        Fotografi
                                    </label>
                                    <label class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <input type="checkbox" name="" value="" class="mr-3 text-sidebarunj border-gray-300 rounded focus:ring-sidebarunj">
                                        Penulisan skenario
                                    </label>
                                    <label class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <input type="checkbox" name="" value="" class="mr-3 text-sidebarunj border-gray-300 rounded focus:ring-sidebarunj">
                                        Storytelling
                                    </label>
                                    <label class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <input type="checkbox" name="" value="" class="mr-3 text-sidebarunj border-gray-300 rounded focus:ring-sidebarunj">
                                        Teknik literasi visual
                                    </label>
                                    <label class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <input type="checkbox" name="" value="" class="mr-3 text-sidebarunj border-gray-300 rounded focus:ring-sidebarunj">
                                        Terjemahan dan interpretasi
                                    </label>
                                    <label class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <input type="checkbox" name="" value="" class="mr-3 text-sidebarunj border-gray-300 rounded focus:ring-sidebarunj">
                                        Penulisan dan pengeditan dalam berbagai bahasa
                                    </label>
                                    <label class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <input type="checkbox" name="" value="" class="mr-3 text-sidebarunj border-gray-300 rounded focus:ring-sidebarunj">
                                        Personal training
                                    </label>
                                    <label class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                                        <input type="checkbox" name="" value="" class="mr-3 text-sidebarunj border-gray-300 rounded focus:ring-sidebarunj">
                                        Yoga dan pilates
                                    </label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2 font-semibold" for="birthdate">Tanggal Lahir</label>
                        <input class="w-full p-2 border border-gray-300 rounded-md" type="text" id="birthdate"
                            placeholder="8 Mei 2007" readonly>
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2 font-semibold" for="education">Pendidikan Terakhir</label>
                        <select class="w-full p-2 border border-gray-300 rounded-md" id="education" readonly>
                            <option value="sma">SMA</option>
                            <option value="diploma">Diploma</option>
                            <option value="sarjana">Sarjana</option>
                            <option value="magister">Magister</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2 font-semibold" for="gender">Jenis Kelamin</label>
                        <select class="w-full p-2 border border-gray-300 rounded-md" id="gender" readonly>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-gray-700 mb-2 font-semibold" for="province">Provinsi Tempat
                            Tinggal</label>
                        <select id="province" class="lg:w-1/2 w-full p-2 border border-gray-300 rounded-md" readonly>
                            <option value="provinsi">Provinsi</option>
                            <!-- Option elements dynamically populated here -->
                        </select>
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
                            <button id="batalButton" type="button"
                                class="border border-red-800 py-3 lg:px-6 rounded-full px-4 text-red-800 hover:bg-red-800 hover:text-white">Batal</button>
                            <button type="submit"
                                class="py-3 lg:px-4 bg-biru-tuwak rounded-full focus:ring-0 px-4 border-none text-white">Ubah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- for calling a source image of banner before edited, DONT REMOVE --}}
    <input type="hidden" id="original-banner"
        value="{{ auth()->user()->photo_banner ? auth()->user()->photo_banner : asset('resources/assets/placeholder.png') }}">
    <input type="hidden" id="original-PP"
        value="{{ auth()->user()->photo ? auth()->user()->photo : asset('resources/assets/placeholder.png') }}">
    </div>


    <div id="keahlian" class="z-10 hidden bg-white rounded-lg shadow w-full">
        <input id="keahlian" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
    </div>


    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x"></script>
    <script>
        const ubahDataButton = document.getElementById('ubahDataButton');
        const batalButton = document.getElementById('batalButton');
        const afterClick = document.getElementById('afterClick');
        const formElements = document.querySelectorAll('#userForm input, #userForm select');

        // Enable form fields and show buttons for saving or cancelling
        ubahDataButton.addEventListener('click', function() {
            formElements.forEach(element => {
                element.removeAttribute('readonly');
            });
            ubahDataButton.style.display = 'none';
            afterClick.classList.remove('hidden');


            // configuration for edit banner
            document.getElementById('file-banner').removeAttribute('disabled')
            const editbanner = document.getElementById('edit-banner')
            editbanner.classList.replace('bg-gray-300', 'bg-biru-tuwak');


            // configuration for edit PP
            document.getElementById('file-PP').removeAttribute('disabled');
            document.getElementById('edit-profile').classList.replace('hover:bg-gray-300', 'hover:bg-biru-tuwak');
        });


        // edit photo profile effect, DONT TOUCH OR EDIT ANYTHING BELOW THIS LINE
        document.getElementById('edit-profile').addEventListener('mouseover', function() {
            document.getElementById('icon-edit-profile').classList.replace('opacity-0', 'opacity-100');
        })
        document.getElementById('edit-profile').addEventListener('mouseout', function() {
            document.getElementById('icon-edit-profile').classList.replace('opacity-100', 'opacity-0');
        })

        // Revert form fields and buttons to the initial state
        batalButton.addEventListener('click', function() {
            // const placeholderUrl = inherit;
            formElements.forEach(element => {
                element.setAttribute('readonly', 'true');
            });
            afterClick.classList.add('hidden');
            ubahDataButton.style.display = 'block';

            // buyback banner from database
            const originalbanner = document.getElementById('original-banner').value
            const banner = document.getElementById('banner')
            banner.src = originalbanner;
            banner.setAttribute('disabled', 'true')

            // buyback PP from database
            const PP = document.getElementById('PP')
            const originalPP = document.getElementById('original-PP').value
            PP.src = originalPP;

            // button edit banner effect config
            const editbanner = document.getElementById('edit-banner')
            editbanner.classList.replace('bg-biru-tuwak', 'bg-gray-300');

            // button edit PP effect config
            document.getElementById('file-PP').setAttribute('disabled', 'true');
            document.getElementById('edit-profile').classList.replace('hover:bg-biru-tuwak', 'hover:bg-gray-300');
        });

        // Display the selected file name for the CV upload input
        function displayFileName() {
            const fileInput = document.getElementById('file');
            const filePreview = document.getElementById('file-preview');
            const fileName = fileInput.files[0].name;

            filePreview.textContent = fileName;
            filePreview.classList.remove('hidden');
            fileInput.classList.add('hidden');
        }

        function displayPreviewBanner() {
            const input = document.getElementById('file-banner');
            const banner = document.getElementById('banner');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    banner.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function displayPreviewPP() {
            const input = document.getElementById('file-PP');
            const banner = document.getElementById('PP');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    banner.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    


@endsection
