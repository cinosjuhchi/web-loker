    @if ($posts->count() == 0)
        <h1 class="font-bold text-2xl mb-5 text-center text-gray-300">kosong</h1>
    @endif
    <div class="grid smaller:grid-cols-1 lg:grid-cols-3 md:grid-cols-2 larger:grid-cols-4 gap-10 mx-[20px] lg:mx-[70px]  mt-8">


        @foreach ($posts as $post)
            <div class="lg:w-[300px] md:w-[370px] lg:max-w-fit smaller:w-full h-[370px] mx-auto pt-4 pb-0 ps-4 pe-4 bg-white shadow-md rounded-lg border-2 border-LightGrey">
                <div class="flex w-full items-center mb-4 h-20 ">
                    <img src="{{ $post->company->photo_profile ? asset('storage/' . $post->company->photo_profile) : Vite::asset('resources/assets/placeholder.png') }}"
                        alt="Company Logo" class="w-12 h-12 rounded-full mr-3 object-cover object-center">

                    <div>
                        <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
                        <p class="text-gray-500 text-sm whitespace-nowrap">{{ $post->company->company_name }}</p>
                    </div>
                </div>
                <hr class="w-full border border-LightGrey">
                <div class="mb-2 h-20 w-full my-10">
                    <div class="flex items-center">
                        <svg width="20" height="20" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.9998 6.59961V23.3996M19.1998 11.4996C19.1998 9.56761 17.3196 7.99961 14.9998 7.99961C12.68 7.99961 10.7998 9.56761 10.7998 11.4996C10.7998 13.4316 12.68 14.9996 14.9998 14.9996C17.3196 14.9996 19.1998 16.5676 19.1998 18.4996C19.1998 20.4316 17.3196 21.9996 14.9998 21.9996C12.68 21.9996 10.7998 20.4316 10.7998 18.4996" stroke="#161616" stroke-width="2" stroke-linecap="round"/>
                            <path d="M8 2.87322C10.1273 1.64248 12.5423 0.99623 15 1.00002C22.7322 1.00002 29 7.26782 29 15C29 22.7322 22.7322 29 15 29C7.2678 29 1 22.7322 1 15C1 12.4506 1.6818 10.058 2.8732 8.00002" stroke="#161616" stroke-width="2" stroke-linecap="round"/>
                        </svg>                        
                        <p class="text-sm font-medium text-gray-900 ms-2 whitespace-nowrap">Rp{{ number_format($post->min_salary, 2, ',', '.') }}
                            - Rp{{ number_format($post->max_salary, 2, ',', '.') }}</p>
                    </div>
                    <div class="flex items-center mt-2">
                        <svg width="20" height="25" viewBox="0 0 28 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 0C17.713 0 21.274 1.475 23.8995 4.10051C26.525 6.72601 28 10.287 28 14C28 19.796 23.5822 25.8689 14.9333 32.3556C14.6641 32.5575 14.3366 32.6667 14 32.6667C13.6634 32.6667 13.3359 32.5575 13.0667 32.3556C4.41778 25.8689 0 19.796 0 14C0 10.287 1.475 6.72601 4.1005 4.10051C6.72601 1.475 10.287 0 14 0ZM14 3.11111C11.1121 3.11111 8.34246 4.25833 6.30039 6.30039C4.25833 8.34246 3.11111 11.1121 3.11111 14C3.11111 18.2156 6.40578 23.0782 13.1413 28.476L14 29.1542L14.8587 28.476C21.5942 23.0782 24.8889 18.2156 24.8889 14C24.8889 11.1121 23.7417 8.34246 21.6996 6.30039C19.6575 4.25833 16.8879 3.11111 14 3.11111ZM14 10.8889C14.8251 10.8889 15.6164 11.2167 16.1999 11.8001C16.7833 12.3836 17.1111 13.1749 17.1111 14C17.1111 14.8251 16.7833 15.6164 16.1999 16.1999C15.6164 16.7833 14.8251 17.1111 14 17.1111C13.1749 17.1111 12.3836 16.7833 11.8001 16.1999C11.2167 15.6164 10.8889 14.8251 10.8889 14C10.8889 13.1749 11.2167 12.3836 11.8001 11.8001C12.3836 11.2167 13.1749 10.8889 14 10.8889Z" fill="#161616"/>
                            </svg>                            
                        <p class="ms-2 text-sm font-medium">{{ $post->company->address }}</p>
                    </div>
                </div>
                <div class="h-10 w-full">
                    <h3 class="text-sm font-semibold">Deskripsi Pekerjaan :</h3>
                    <p class="text-gray-700 text-sm truncate max-w-[200px]">{!! $post->content !!}</p>
                </div>
                <div class="flex justify-between mt-7">
                    <button class="" id="bookmarkbtn">
                        <svg class="my-2" width="18" height="24" viewBox="0 0 18 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.125 0.0546875H16.875C17.1734 0.0546875 17.4595 0.173214 17.6705 0.384192C17.8815 0.595171 18 0.881319 18 1.17969V22.7156C18.0001 22.8161 17.9733 22.9149 17.9223 23.0016C17.8712 23.0883 17.7979 23.1597 17.7099 23.2084C17.6219 23.2571 17.5225 23.2813 17.4219 23.2786C17.3214 23.2758 17.2234 23.2461 17.1382 23.1926L9 18.0884L0.86175 23.1914C0.776664 23.2449 0.678811 23.2746 0.578365 23.2774C0.477919 23.2803 0.378547 23.2561 0.290582 23.2076C0.202617 23.159 0.12927 23.0877 0.0781682 23.0012C0.0270661 22.9147 7.47797e-05 22.816 0 22.7156V1.17969C0 0.881319 0.118527 0.595171 0.329505 0.384192C0.540484 0.173214 0.826631 0.0546875 1.125 0.0546875ZM15.75 2.30469H2.25V19.6657L9 15.4346L15.75 19.6657V2.30469Z" fill="black"/>
                        </svg>                        
                    </button>

                    <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                        class=" bg-biru-tuwak text-white py-2 px-3 rounded-full open-modal mb-3"
                        data-post-title="{{ $post->title }}" data-company-name="{{ $post->company->company_name }}"
                        data-min_salary="Rp{{ $post->min_salary }}" data-address="{{ $post->company->address }}"
                        data-max_salary="Rp{{ $post->max_salary }}" data-address="{{ $post->company->address }}"
                        data-category-id="{{ $post->category->name }}"
                        data-job-description="{!! $post->content !!}">Selengkapnya</button>
                </div>
            </div>
        @endforeach
        
    </div>
    <div class="flex justify-end mx-[70px] mt-8">
        @guest
        {{ $posts->links() }}
        @endguest
    </div>


    <!-- Modal footer -->
    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full">
        <div class="relative p-4 w-full max-w-lg max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white" id="modal-title">
                        Detail Lowongan Kerja
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
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
                    <hr class="border border-LightGrey">
                    <div>
                        <p class="text-sm leading-relaxed text-gray-500 dark:text-gray-400">Estimasi Gaji</p>
                        <p class="text-base font-semibold text-gray-900"><span id="modal-min_salary"></span> - <span
                                id="modal-max_salary"></span></p>
                    </div>
                    <div>
                        <p class="text-sm leading-relaxed text-gray-500 dark:text-gray-400">Alamat Perusahaan
                        </p>
                        <p class="text-base font-semibold text-gray-900" id="modal-address">Address</p>
                    </div>
                    <div>
                        <p class="text-sm leading-relaxed text-gray-500 dark:text-gray-400">Kategori Pekerjaan
                        </p>
                        <p class="text-base font-semibold text-gray-900" id="modal-category-id">Category ID</p>
                    </div>
                    <div>
                        <p class="text-sm leading-relaxed text-gray-500 dark:text-gray-400">Deskripsi
                            Pekerjaan
                        </p>
                        <p class="text-base font-semibold text-gray-900" id="modal-job-description">Job
                            Description
                        </p>
                    </div>
                </div>
                <!-- Modal footer -->
                <div
                    class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600 justify-between">
                    {{-- <a href="/register">
                        <button data-modal-hide="default-modal" type="button"
                            class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            Simpan
                        </button>
                    </a> --}}
                    <button id="reportbtn">
                        <svg width="32" height="32" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20.9531" cy="21" r="19.6406" stroke="#FC2828" stroke-width="2.625"/>
                            <path d="M21 8.67188C20.3922 8.67188 19.8364 9.18841 19.8771 9.79477L20.4386 24.9538C20.4386 25.1028 20.4977 25.2456 20.603 25.3509C20.7083 25.4561 20.8511 25.5153 21 25.5153C21.1489 25.5153 21.2917 25.4561 21.397 25.3509C21.5023 25.2456 21.5614 25.1028 21.5614 24.9538L22.1229 9.79477C22.1636 9.18841 21.6078 8.67188 21 8.67188Z" fill="#FC2828" stroke="#FC2828" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21.0001 33.3757C21.6202 33.3757 22.123 32.8729 22.123 32.2528C22.123 31.6326 21.6202 31.1299 21.0001 31.1299C20.3799 31.1299 19.8772 31.6326 19.8772 32.2528C19.8772 32.8729 20.3799 33.3757 21.0001 33.3757Z" fill="#FC2828" stroke="#FC2828" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                        
                    </button>
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
        document.getElementById('reportbtn').addEventListener('click', function() {
            Swal.fire({
                title: "Laporkan Perusahaan Ini!",

                html: `
                  <div class="justify-start ">
                    <p class="text-left mx-2">Alasan :</p>
                    <div class="justify-start flex flex-col mt-3">
                       
                        <div class="flex gap-1">
                        <input type="radio" id="reason1" name="reason" value="spam" class="my-2 mx-2">
                        <label for="reason1" class="text-start my-1">Saya rasa ini spam </label><br>
                        </div>
                        <div class="flex gap-1">
                        <input type="radio" id="reason1" name="reason" value="spam" class="my-2 mx-2">
                        <label for="reason1" class="text-start my-1">Saya rasa ini diskriminasi</label><br>
                        </div>
                        <div class="flex gap-1">
                        <input type="radio" id="reason1" name="reason" value="spam" class="my-2 mx-2">
                        <label for="reason1" class="text-start my-1">Saya rasa ini penipuan</label><br>
                        </div>
                        <div class="flex gap-1">
                        <input type="radio" id="reason1" name="reason" value="spam" class="my-2 mx-2">
                        <label for="reason1" class="text-start my-1">Saya rasa ini seperti rusak atau salah informasi</label><br>
                        </div>
                        
                    </div>
                  </div>
                `,
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Kirim Laporan",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Laporan anda berhasil dikirim",
                        text: "Admin akan segera mengatasi masalah ini",
                        icon: "success"
                    });
                }
            });
        });

        document.getElementById('bookmarkbtn').addEventListener('click', function() {
            Swal.fire({
                title: "Berhasil Dimasukkan Ke Bookmark",

                html: `
                `,
                icon: "success",
                confirmButtonColor: "#3085d6",
                confirmButtonText: "Kembali Ke Halaman",
            })
        });

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
                    document.getElementById('modal-job-description').innerHTML = jobDescription;
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
