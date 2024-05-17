@extends('layouts.DefaultLayout')
@section('profileCompany')
    <div class="">
        <div class="relative">
            <img src="https://via.placeholder.com/1200x400" alt="Header Image" class="w-full h-64 object-cover">

            <div class="absolute inset-x-0 bottom-0 transform translate-y-1/2 flex justify-center ">
                <img src="https://via.placeholder.com/150" alt="Profile Picture"
                    class="w-32 h-32 rounded-full border-4 border-white">
            </div>
        </div>

        <div class="mt-16 text-center">
            <h1 class="text-2xl font-semibold">Username</h1>
        </div>

        <div class="mt-5">
            <div class=" justify-center lg:flex block w-fit mx-auto gap-2">
                <div class="mb-4 lg:mb-0 ">
                    <button class=" bg-biru-tuwak rounded-full focus:ring-0 p-3 border-none text-white">Tambahkan
                        Lowongan</button>

                </div>

                <div class="mb-4 lg:mb-0">
                    <button
                        class="border border-red-800 py-3 lg:px-6 rounded-full text-red-800 px-4 w-full hover:bg-red-800 hover:text-white">Keluar</button>

                </div>
            </div>

        </div>
    </div>

    <div class="lg:mx-[100px] mx-5">
        <div class="mb-6">
            <label class="block text-gray-700 font-semibold mb-2 lg:text-2xl" for="description">Deskripsi Perusahaan:</label>
            <div class="border border-gray-300 p-4 rounded-lg bg-gray-100">
                <p>Sebagai seorang programmer full stack, saya mampu mengembangkan aplikasi web dari tampilan antarmuka
                    (front-end) menggunakan HTML, CSS, dan JavaScript hingga logika server dan database (back-end) dengan
                    Python, Ruby, atau Java. Saya juga berpengalaman dalam mengelola server, bekerja dengan database SQL dan
                    NoSQL, serta mengintegrasikan API. Dengan keahlian ini, saya dapat merancang, membangun, dan memelihara
                    aplikasi web yang efisien dan user-friendly.</p>
                <button class="mt-2 text-blue-600 hover:underline">Edit</button>
            </div>
        </div>




        <div class="mb-6">
            <h2 class="text-gray-700 text-2xl  font-semibold mb-4">Informasi data perusahaan</h2>
            <form class="">
                <div class="lg:flex w-full  gap-5">
                    <div class="lg:w-[50%]">
                        <div>
                            <label class="block text-gray-700 mb-2 font-semibold" for="username">Nama Perusahaan</label>
                            <input class="w-full p-2 border border-gray-300 rounded-md" type="text" id="username"
                                placeholder="PT. Azka Auliarahma maju jaya abadi aamiin">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2 font-semibold" for="phoneNumber">Nomor Telepon</label>
                            <input class="w-full p-2 border border-gray-300 rounded-md" type="text" id="phoneNumber"
                                placeholder="0812-9292-8245">
                        </div>
                    </div>
    
                    <div class="lg:w-[50%]">
                        <div>
                            <label class="block text-gray-700 mb-2 font-semibold" for="email">Email</label>
                            <input class="w-full p-2 border border-gray-300 rounded-md" type="email" id="email"
                                placeholder="azka@gmail.com">
                        </div>
    
                        <div>
                            <label class="block text-gray-700 mb-2 font-semibold" for="expertise">Bidang Pekerjaan</label>
                            <select name="category_id" id="" class="w-full p-2 border border-gray-300 rounded-md">
                                <option value="">Pilih bidang perusahaan</option>
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
                                <input class="w-full p-2 border border-gray-300 rounded-md" type="text" id="username"
                                    placeholder="PT. Azka Auliarahma maju jaya abadi aamiin">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2 font-semibold" for="username">Kecamatan</label>
                                <input class="w-full p-2 border border-gray-300 rounded-md" type="text" id="username"
                                    placeholder="PT. Azka Auliarahma maju jaya abadi aamiin">
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-gray-700 mb-2 font-semibold" for="province">Provinsi</label>
                                <select class=" w-full p-2 border border-gray-300 rounded-md" id="province">
                                    <option value="provinsi">Provinsi</option>
                                    @foreach ($provinces as $province)
                                        <option value="{{ $province['name'] }}">{{ $province['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2 font-semibold" for="username">Negara</label>
                                <input class="w-full p-2 border border-gray-300 rounded-md" type="text" id="username"
                                    placeholder="PT. Azka Auliarahma maju jaya abadi aamiin">
                            </div>
                        </div>

                        <div class="lg:w-[50%]">
                            <div>
                                <label class="block text-gray-700 mb-2 font-semibold" for="username">Kelurahan</label>
                                <input class="w-full p-2 border border-gray-300 rounded-md" type="text" id="username"
                                    placeholder="PT. Azka Auliarahma maju jaya abadi aamiin">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2 font-semibold" for="username">Kota</label>
                                <input class="w-full p-2 border border-gray-300 rounded-md" type="text" id="username"
                                    placeholder="PT. Azka Auliarahma maju jaya abadi aamiin">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2 font-semibold" for="username">Kode Pos</label>
                                <input class="w-full p-2 border border-gray-300 rounded-md" type="text" id="username"
                                    placeholder="PT. Azka Auliarahma maju jaya abadi aamiin">
                            </div>
                        </div>
                    </div>
                  
                    
                </div>
               

                <div class="mt-10">
                    <div class="mr-0 lg:flex block mx-auto w-fit gap-2">
                        <div class="">
                            <button id="ubahDataButton" type="button"
                                class="py-3 lg:px-6 bg-biru-tuwak rounded-full focus:ring-0 p-3 border-none text-white">Ubah
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
