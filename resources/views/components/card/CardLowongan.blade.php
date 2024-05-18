@extends('layouts.GuestLayout')
@section('cardLowongan')
    <div class="grid lg:grid-cols-4 min-[300px]:cols-6 gap-5  mx-[20px] lg:mx-[70px]  mt-8">
        @foreach ($posts as $post)
            <div class="max-w-[400px] h-[300px] mx-auto p-4 bg-white shadow-md rounded-lg">
                <div class="flex items-center mb-4 h-20 ">
                    <img src="{{ $post->company->photo_profile ? asset($post->company->photo_profile) : Vite::asset('resources/assets/placeholder.png') }}"
                        alt="Alfamart Logo" class="w-12 h-12 rounded-full mr-3 object-cover object-center">

                    <div>
                        <h2 class="text-md font-semibold">{{ $post->title }}</h2>
                        <p class="text-gray-500">{{ $post->company->company_name }}</p>
                    </div>
                </div>
                <div class="mb-2">
                    <p class="text-sm font-semibold text-gray-900">Rp{{ $post->min_salary }} - Rp{{ $post->max_salary }}</p>
                    <div class="flex items-center text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11V5a1 1 0 10-2 0v2H7a1 1 0 000 2h2v2a1 1 0 002 0V9h2a1 1 0 100-2h-2z"
                                clip-rule="evenodd" />
                        </svg>
                        {{ $post->company->address }}
                    </div>
                </div>
                <div class="mb-2">
                    <h3 class="text-sm font-semibold">Deskripsi Pekerjaan :</h3>
                    <p class="text-gray-700 text-sm truncate max-w-[200px]">{{ $post->content }}</p>
                </div>
                {{-- <div>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        Kategori Pekerjaan
                    </p>
                    <p class="text-sm font-semibold text-gray-900">Engineer</p>
                </div>
                <div>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        Deskripsi Pekerjaan
                    </p>
                    <p class="text-sm font-semibold text-gray-900">Menjadi seorang tukang parkir yang jujur baik dan tidak
                        sombong</p>
                </div> --}}
                <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                    class="w-full bg-biru-tuwak text-white py-2 rounded-full open-modal"
                    data-post-title="{{ $post->title }}" data-company-name="{{ $post->company->company_name }}"
                    data-min_salary="Rp{{ $post->min_salary }}" data-address="{{ $post->company->address }}"
                    data-max_salary="Rp{{ $post->max_salary }}" data-address="{{ $post->company->address }}"
                    data-category-id=" {{ $post->category->name }} " data-job-description="{{ $post->content }}" ">Selengkapnya</button>
                                </div>
     @endforeach
            </div>


            <!-- Modal footer -->
            {{-- <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600 justify-end">
                <a href="/disimpan-user"><button data-modal-hide="default-modal" type="button"
                        class=" py-2.5 px-5  text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Simpan</button></a>
                <a href="/upload-lamaran"><button data-modal-hide="default-modal" type="button"
                        class="ms-3 text-white bg-biru-tuwak hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Lamar
                        Pekerjaan</button></a> --}}
                <div id="default-modal" tabindex="-1" aria-hidden="true"
                    class="hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full">
                    <div class="relative p-4 w-full max-w-lg max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white" id="modal-title">
                                    Detail Lowongan Kerja
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="default-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                <div class="flex items-center mb-4">
                                    <img src="https://via.placeholder.com/50x50.png?text=Alfamart" alt="Alfamart Logo"
                                        class="w-12 h-12 mr-3" id="modal-company-logo">
                                    <div>
                                        <h2 class="text-md font-semibold" id="modal-post-title">Title</h2>
                                        <p class="text-gray-500" id="modal-company-name">Company Name</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">Estimasi Gaji</p>
                                    <p class="text-sm font-semibold text-gray-900"><span id="modal-min_salary"></span> - <span id="modal-max_salary"></span></p>
                                </div>
                                <div>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">Alamat Perusahaan
                                    </p>
                                    <p class="text-sm font-semibold text-gray-900" id="modal-address">Address</p>
                                </div>
                                <div>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">Kategori Pekerjaan
                                    </p>
                                    <p class="text-sm font-semibold text-gray-900" id="modal-category-id">Category ID</p>
                                </div>
                                <div>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">Deskripsi
                                        Pekerjaan
                                    </p>
                                    <p class="text-sm font-semibold text-gray-900" id="modal-job-description">Job
                                        Description
                                    </p>
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div
                                class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600 justify-end">
                                <a href="/register">
                                    <button data-modal-hide="default-modal" type="button"
                                        class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                        Simpan
                                    </button>
                                </a>
                                <a href="/upload-lamaran">
                                    <button data-modal-hide="default-modal" type="button"
                                        class="ms-3 text-white bg-biru-tuwak hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Lamar Pekerjaan
                                    </button>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const openModalButtons = document.querySelectorAll('.open-modal');

                        openModalButtons.forEach(button => {
                            button.addEventListener('click', function() {
                                const postTitle = this.getAttribute('data-post-title');
                                const companyName = this.getAttribute('data-company-name');
                                const min_salary = this.getAttribute('data-min_salary');
                                const max_salary = this.getAttribute('data-max_salary');
                                const address = this.getAttribute('data-address');
                                const categoryId = this.getAttribute('data-category-id');
                                const jobDescription = this.getAttribute('data-job-description');

                                const modal = document.getElementById('default-modal');
                                modal.classList.remove('hidden');

                                document.getElementById('modal-post-title').innerText = postTitle;
                                document.getElementById('modal-company-name').innerText = companyName;
                                document.getElementById('modal-min_salary').innerText = min_salary;
                                document.getElementById('modal-max_salary').innerText = max_salary;
                                document.getElementById('modal-address').innerText = address;
                                document.getElementById('modal-category-id').innerText = categoryId;
                                document.getElementById('modal-job-description').innerText = jobDescription;
                            });
                        });

                        // Fungsi untuk menutup modal
                        const closeModal = () => {
                            const modal = document.getElementById('default-modal');
                            modal.classList.add('hidden');
                        };

                        // Tangkap klik tombol untuk menutup modal
                        const closeButton = document.querySelector('[data-modal-hide="default-modal"]');
                        if (closeButton) {
                            closeButton.addEventListener('click', closeModal);
                        }
                    });
                </script>





                <!-- Modal toggle -->


                <!-- Main modal -->
                {{-- <div id="default-modal" tabindex="-1" aria-hidden="true"
            //     class="transition-all duration-1000 ease-in-out hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            //     <div class="relative p-4 w-full max-w-lg max-h-full">
            //         <!-- Modal content -->
            //         <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            //             <!-- Modal header -->
            //             <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
            //                 <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
            //                     Detail Lowongan Kerja
            //                 </h3>
            //                 <button type="button"
            //                     class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
            //                     data-modal-hide="default-modal">
            //                     <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            //                         viewBox="0 0 14 14">
            //                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            //                             stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            //                     </svg>
            //                     <span class="sr-only">Close modal</span>
            //                 </button>
            //             </div>
            //             <!-- Modal body -->

            //             <div class="p-4 md:p-5 space-y-4">
            //                 <div class="flex items-center mb-4">
            //                     <img src="https://via.placeholder.com/50x50.png?text=Alfamart" alt="Alfamart Logo"
            //                         class="w-12 h-12 mr-3">
            //                     <div>
            //                         <h2 class="text-md font-semibold">Tukang Parkir</h2>
            //                         <p class="text-gray-500">PT. Alfamart</p>
            //                     </div>
            //                 </div>
            //                 <div>
            //                     <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
            //                         Estimasi Gaji
            //                     </p>
            //                     <p class="text-sm font-semibold text-gray-900">Rp10.000.000 - Rp20.000.000</p>
            //                 </div>
            //                 <div>
            //                     <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
            //                         Alamat Perusahaan
            //                     </p>
            //                     <p class="text-sm font-semibold text-gray-900">Koja, Jakarta Utara, DKI Jakarta</p>
            //                 </div>
            //                 <div>
            //                     <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
            //                         Kategori Pekerjaan
            //                     </p>
            //                     <p class="text-sm font-semibold text-gray-900">
            //                     </p>
            //                 </div>
            //                 <div>
            //                     <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
            //                         Deskripsi Pekerjaan
            //                     </p>
            //                     <p class="text-sm font-semibold text-gray-900">Menjadi seorang tukang parkir yang jujur baik
            //                         dan
            //                         tidak sombong</p>
            //                 </div>


            //             </div>
            //             <!-- Modal footer -->
            //             <div
            //                 class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600 justify-end">
            //                 <a href="/register"><button data-modal-hide="default-modal" type="button"
            //                         class=" py-2.5 px-5  text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Simpan</button></a>
            //                 <a href="/register"><button data-modal-hide="default-modal" type="button"
            //                         class="ms-3 text-white bg-biru-tuwak hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Lamar
            //                         Pekerjaan</button></a>

            //             </div>
            //         </div>
            //     </div>
            // </div> --}}
            @endsection
