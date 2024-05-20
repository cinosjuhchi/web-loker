@extends('layouts.DefaultLayout')

@section('profileUser')
    <form id="userForm">
        @csrf
        <div class="">
            <div class="relative">
                <img src="{{ optional(auth()->user())->photo_banner ? asset(optional(auth()->user())->photo_banner) : asset('resources/assets/placeholder.png') }}"
                    alt="Header Image" id="banner" class="w-full h-64 object-cover">
                <input type="file" id="file" name="file" class="hidden w-full h-16"
                    onchange="displayFileNameBanner()" disabled>
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
                    <img src="https://via.placeholder.com/150" alt="Profile Picture"
                        class="w-32 h-32 rounded-full border-4 border-white object-cover object-center">
                    <input type="file" id="file" name="file" class="hidden w-full h-16"
                        onchange="displayFileName()" readonly>
                    <label for="file"
                        class=" absolute flex p-10 top-2 rounded-full hover:bg-gray-200 text-center  select-none cursor-pointer  text-white">

                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                            class="opacity-0 hover:opacity-100" fill="none">
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

                    <div>
                        <label class="block text-gray-700 mb-2 font-semibold" for="expertise">Keterampilan</label>
                        <select name="category_id" id="expertise" class="w-full p-2 border border-gray-300 rounded-md"
                            readonly>
                            <option value="">Pilih bidang perusahaan</option>
                            <!-- Option elements dynamically populated here -->
                        </select>
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


    <script>
        const ubahDataButton = document.getElementById('ubahDataButton');
        const batalButton = document.getElementById('batalButton');
        const afterClick = document.getElementById('afterClick');
        const formElements = document.querySelectorAll('#userForm input, #userForm select');

        // Enable form fields and show buttons for saving or cancelling
        ubahDataButton.addEventListener('click', function() {
            formElements.forEach(element => {
                element.removeAttribute('readonly');
                element.removeAttribute('disabled');
            });
            ubahDataButton.style.display = 'none';
            afterClick.classList.remove('hidden');
        });

        // Revert form fields and buttons to the initial state
        batalButton.addEventListener('click', function() {
            const placeholderUrl = "{{ url(Vite::asset('resources/assets/placeholder.png')) }}";
            const banner = document.getElementById('banner')
            formElements.forEach(element => {
                element.setAttribute('readonly', 'true');
            });
            banner.setAttribute('disabled', 'true')
            // document.getElementById('photo-banner').src(url({{ 'resources/assets/placeholder.png' }}))
            banner.src = placeholderUrl;
            afterClick.classList.add('hidden');
            ubahDataButton.style.display = 'block';
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

        function displayFileNameBanner() {
            const input = document.getElementById('file');
            const banner = document.getElementById('banner');

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
