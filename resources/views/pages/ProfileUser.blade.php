@extends('layouts.DefaultLayout')
@section('profileUser')
    <div class="">
        <div class="relative">
            <img src="https://via.placeholder.com/1200x400" alt="Header Image" class="w-full h-64 object-cover">

            <div class="absolute inset-x-0 bottom-0 transform translate-y-1/2 flex justify-center ">
                <img src="https://via.placeholder.com/150" alt="Profile Picture"
                    class="w-32 h-32 rounded-full border-4 border-white">
            </div>
        </div>

        <div class="mt-16 text-center">
            <h1 class="text-2xl font-semibold">{{ auth()->user()->name }}</h1>
        </div>

        <div class="mt-5">
            <div class=" justify-center lg:flex block w-fit mx-auto gap-2">
                <div class="mb-4 lg:mb-0 ">
                    <select name="" id="status"
                        class=" bg-biru-tuwak rounded-full focus:ring-0 p-3 border-none text-white">
                        <option value="terbuka" class="bg-white text-black">Terbuka Untuk Kerja</option>
                        <option value="tidak" class="bg-white text-black">Tidak Mencari Pekerjaan</option>
                    </select>
                </div>

                <div class="mb-4 lg:mb-0">
                    <button
                        class="border border-red-800 py-3 lg:px-6 rounded-full text-red-800 px-4 w-full hover:bg-red-800 hover:text-white">Keluar</button>

                </div>
            </div>

        </div>
    </div>

    <div class="lg:mx-[100px] mx-5">
        <form>
            <div class="mb-6">
                <label class="block lg:text-2xl text-gray-700 font-semibold mb-2" for="description">Deskripsi diri
                    anda:</label>
                <div class="border border-gray-300 p-4 rounded-lg bg-gray-100">
                    <p>{{ auth()->user()->description }}</p>
                    <button class="mt-2 text-blue-600 hover:underline">Edit</button>
                </div>
            </div>

            <div class="mb-6">
                <label class="block text-2xl text-gray-700 font-semibold mb-2" for="uploadCV">Upload CV anda:</label>
                <div class="border-2 border-dashed border-gray-300 p-6 text-center rounded-lg bg-gray-50">
                    <p class="mb-2 text-gray-500">File dapat berbentuk pdf, docx</p>
                    <p class="text-gray-500">Ukuran maksimal 3MB</p>
                    <div class="mt-4">
                        <input type="file" id="file" name="file" class="hidden" onchange="displayFileName()">
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
                            placeholder="Username Kamu" value="{{ auth()->user()->username }}">
                    </div>


                    <div>
                        <label class="block text-gray-700 mb-2 font-semibold" for="fullName">Nama</label>
                        <input class="w-full p-2 border border-gray-300 rounded-md" type="text" id="fullName"
                            placeholder="nama kamu" value="{{ auth()->user()->name}}">
                    </div>


                    <div>
                        <label class="block text-gray-700 mb-2 font-semibold" for="email">Email</label>
                        <input class="w-full p-2 border border-gray-300 rounded-md" type="email" id="email"
                            placeholder="azka@gmail.com" value="{{ auth()->user()->email }}">
                    </div>


                    <div>
                        <label class="block text-gray-700 mb-2 font-semibold" for="phoneNumber">Nomor Telepon</label>
                        <input class="w-full p-2 border border-gray-300 rounded-md" type="text" id="phoneNumber"
                            placeholder="0812-9292-8245" value="{{ auth()->user()->number_phone }}">
                    </div>


                    <div>
                        <label class="block text-gray-700 mb-2 font-semibold" for="expertise">Keterampilan</label>
                        <select name="category_id" id="" class="w-full p-2 border border-gray-300 rounded-md">
                            <option value="">Pilih bidang perusahaan</option>
                            @foreach ($category as $item)
                                <option  selected value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div>
                        <label class="block text-gray-700 mb-2 font-semibold" for="birthdate">Tanggal Lahir</label>
                        <input class="w-full p-2 border border-gray-300 rounded-md" type="text" id="birthdate"
                            placeholder="8 Mei 2007" value="{{ auth()->user()->datebirth }}">
                    </div>


                    <div>
                        <label class="block text-gray-700 mb-2 font-semibold" for="education">Pendidikan Terakhir</label>
                        <select class="w-full p-2 border border-gray-300 rounded-md" id="education">
                            <option selected value="sma">SMA</option>
                            <option value="diploma">Diploma</option>
                            <option value="sarjana">Sarjana</option>
                            <option value="magister">Magister</option>
                        </select>
                    </div>


                    <div>
                        <label class="block text-gray-700 mb-2 font-semibold" for="gender">Jenis Kelamin</label>
                        <select class="w-full p-2 border border-gray-300 rounded-md" id="gender">
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>


                    <div class="md:col-span-2">
                        <label class="block text-gray-700 mb-2 font-semibold" for="province">Provinsi Tempat
                            Tinggal</label>
                        <select class="lg:w-1/2 w-full p-2 border border-gray-300 rounded-md" id="province">
                            <option value="provinsi">Provinsi</option>
                            @foreach ($provinces as $province)
                                <option value="{{ $province['name'] }}">{{ $province['name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="mt-10  ">
                    <div class="mr-0 lg:flex block mx-auto w-fit gap-2">
                        <div class="">
                            <button id="ubahDataButton" type="button"
                                class="py-3 lg:px-6 bg-biru-tuwak rounded-full focus:ring-0 p-3 border-none text-white lg:justify-end">Ubah
                                Data</button>
                        </div>
                        <div id="afterClick" class="hidden">
                            <button
                                class="border border-red-800 py-3 lg:px-6 rounded-full px-4 text-red-800 hover:bg-red-800 hover:text-white">Batal</button>
                            <button
                                class="py-3 lg:px-4 bg-biru-tuwak rounded-full focus:ring-0 px-4 border-none text-white">Ubah</button>
                        </div>
                    </div>
                </div>

        </form>






    </div>



    <script>
        function displayFileName() {
            var fileInput = document.getElementById('file');
            var filePreview = document.getElementById('file-preview');
            var file = fileInput.files[0];

            if (file) {
                var fileName = file.name;
                var fileSize = (file.size / 1024 / 1024).toFixed(2) + ' MB';

                if (file.type.startsWith('image/')) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        filePreview.innerHTML = `
                        <p><strong>File Name:</strong> ${fileName}</p>
                        <p><strong>File Size:</strong> ${fileSize}</p>
                        <img src="${e.target.result}" alt="Image Preview" class="mt-2 max-w-full h-auto rounded-lg border border-gray-300">
                    `;
                    };
                    reader.readAsDataURL(file);
                } else {
                    filePreview.innerHTML = `
                    <p><strong>File Name:</strong> ${fileName}</p>
                    <p><strong>File Size:</strong> ${fileSize}</p>
                `;
                }
            } else {
                filePreview.innerHTML = '<p>No file chosen</p>';
            }
        }
        document.addEventListener("DOMContentLoaded", function() {
            const ubahDataButton = document.getElementById("ubahDataButton");
            const afterClick = document.getElementById("afterClick");

            ubahDataButton.addEventListener("click", function() {
                afterClick.classList.toggle("hidden");
                ubahDataButton.classList.toggle("hidden");
            });
        });


        document.getElementById("status").addEventListener("change", function() {
            var selectBox = document.getElementById("status");
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
            var selectElement = document.getElementById("status");

            if (selectedValue === "terbuka") {
                selectElement.classList.remove("bg-red-800");
                selectElement.classList.add("bg-biru-tuwak");
            } else if (selectedValue === "tidak") {
                selectElement.classList.remove("bg-biru-tuwak");
                selectElement.classList.add("bg-red-800");
            }
        });
    </script>
@endsection
