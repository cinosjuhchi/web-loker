<nav class="bg-LightBlue w-full top-0 start-0 h-[70px] relative z-50">
    <div class="flex flex-wrap items-center justify-between mx-2 lg:mx-[70px] p-4">
        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ Vite::asset('resources/assets/logo/logo2.png') }}" class="h-8" alt="Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap">WorkSeeker</span>
        </a>
        <button id="menu-toggle" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden md:flex md:order-2 space-x-3 mx-3 md:space-x-0 rtl:space-x-reverse">
            {{-- Role GUEST --}}
            @guest
                {{-- ini guest --}}
                <a href="/login"
                    class="block py-2 px-3 mr-3 lg:border border-biru-tuwak rounded-none lg:rounded-full  hover:bg-white/50 duration-300 ease-in-out text-biru-tuwak lg:py-2 lg:px-6">Masuk</a>
                <a href="/pilih-akun"
                    class="block py-2 px-3 text-white bg-biru-tuwak rounded-none lg:rounded-full lg:hover:bg-biru-tuwak lg:hover:text-white hover:bg-white/50 duration-300 ease-in-out hover:text-black/70 lg:py-2 lg:px-6">Daftar</a>
            @endguest

            {{-- Role Login --}}
            @auth
                {{-- @if (Auth::user()->role == 'auth') --}}

                {{-- ini yang user yang udah login --}}
                <div class="flex items-center">
                    <button type="button" class="flex text-sm gap-2 md:me-0" id="user-menu-button" aria-expanded="false"
                        data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <img src="{{ optional(auth()->user())->photo_banner ? asset('storage/' . auth()->user()->photo) : Vite::asset('resources/assets/placeholder.png') }}"
                            class="{{ Auth::guard('web')->check() ? 'object-cover object-center rounded-full w-8 h-8' : 'hidden' }}"
                            alt="" srcset="">
                        <img src="{{ auth()->user()->photo_profile == null ? Vite::asset('resources/assets/placeholder.png') : asset('storage/' . auth()->user()->photo_profile) }}"
                            class="{{ Auth::guard('company')->check() ? 'object-cover object-center rounded-full w-8 h-8' : 'hidden' }}"
                            alt="" srcset="">
                        <div class="grid text-left justify-center">
                            <p class="font-semibold">{{ auth()->user()->username }}</p>
                            <p class="font-semibold">{{ auth()->user()->company_name }}</p>
                            <p>{{ auth()->user()->email }}</p>
                            <p>{{ auth()->user()->company_email }}</p>
                        </div>
                    </button>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="user-dropdown">
                        <ul class="py-2 px-3" aria-labelledby="user-menu-button">
                            <li>
                                @if (Auth::guard('web')->check())
                                    <a href="/profile-user"
                                        class="flex items-center px-6 py-2 text-sm font-semibold text-gray-700">
                                        <img src="{{ optional(auth()->user())->photo ? asset('storage/' . auth()->user()->photo) : Vite::asset('resources/assets/placeholder.png') }}"
                                            class="{{ Auth::guard('web')->check() ? 'object-cover object-center rounded-full relative -left-2 w-6 h-6' : 'hidden' }}"
                                            alt="" srcset="">
                                        Profil
                                    </a>
                                @elseif(Auth::guard('company')->check())
                                    <a href="/profile-company"
                                        class="flex items-center px-6 py-2 text-sm font-semibold text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 relative -left-2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                        Profil
                                    </a>
                                @endif
                            </li>
                            <li class="flex">
                                <a href="#" class="flex items-center px-6 py-2 text-sm font-semibold text-gray-700">
                                    <svg class="w-6 h-6 relative -left-2 text-gray-800 dark:text-white hidden md:block"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z" />
                                    </svg>
                                    Disimpan
                                </a>
                            </li>
                            <li>
                                <form action="{{ Auth::guard('company')->check() ? '/logout-company' : '/logout' }}"
                                    method="post">
                                    @csrf
                                    <button class="flex items-center px-6 py-2 text-sm font-semibold text-red-800">
                                        <svg class="w-6 h-6 relative -left-2 text-red-800 dark:text-red-800 hidden md:block"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                                        </svg>
                                        Keluar
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- @endif --}}
            @endauth
        </div>
        <div class="hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 bg-LightBlue mt-4 font-medium md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                {{-- @if (Auth::user('auth')) --}}
                {{-- Pengkondisian User seeker --}}
                {{-- ini user biasa --}}
                @if (Auth::guard('web')->check())
                    {{-- Links untuk user --}}
                    <li>
                        <a href="/dashboard-user"
                            class="block py-2 px-3 text-gray-900 bg-blue-700 rounded md:bg-transparent  md:hover:text-blue-700 md:p-0 {{ request()->routeIs('user.dashboard') ? 'md:text-blue-700' : '' }}">Dashboard</a>
                    </li>
                    <li>
                        <a href="/cari-loker"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 {{ request()->routeIs('cariLoker') ? 'md:text-blue-700' : '' }}">Cari
                            Lowongan Kerja</a>
                    </li>
                    <li>
                        <a href="{{ route('company.user.profile') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 {{ request()->routeIs('pasangLoker') ? 'md:text-blue-700' : '' }}">
                            Profil Perusahaan</a>
                    </li>
                    <li>
                        <a href="/disimpan-user"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Disimpan</a>
                    </li>
                @elseif(Auth::guard('company')->check())
                    {{-- Links untuk company --}}
                    <li>
                        <a href="/cari-loker"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Dashboard</a>
                    </li>
                    <li>
                        <a href="/pasang-lowongan"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Pasang
                            Lowongan</a>
                    </li>
                    <li>
                        <a href="/loker-company"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">
                            Lowongan Kerja</a>
                    </li>
                    <li>
                        <a href="/pelamar-kerja"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Pelamar
                            Kerja</a>
                    </li>
                @endif




                @guest
                    {{-- @if (Auth::user('guest')) --}}
                    {{-- Pengkondisian apabila belum login / guest maka munculkan yang ada di sini --}}
                    {{-- kalo belum login muncul yg ini --}}
                    <li>
                        <a href="/"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="/cari-loker"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Cari
                            Pekerjaan</a>
                    </li>
                    <li>
                        <a href="/pasang-loker"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Pasang
                            Lowongan Pekerjaan</a>
                    </li>
                    <li>
                        <a href="/about-us"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Tentang
                            Kami</a>
                    </li>
                    {{-- @endif --}}
                @endguest


            </ul>
        </div>
    </div>





    <div class="md:hidden" id="mobile-menu">
        <ul class="flex flex-col p-4 bg-LightBlue font-medium rtl:space-x-reverse">
            {{-- Pengkondisian apabila Sudah login maka munculkan yang ada di sini --}}
            @auth
                {{-- sudah login tapi mobile     --}}
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0"
                        aria-current="page">Dashboard</a>
                </li>
                <li>
                    <a href="/cari-loker"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Cari
                        Lowongan Kerja</a>
                </li>
                <li>
                    <a href="/pasang-loker"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Pasang
                        Profil Perusahaan</a>
                </li>
                <li>
                    <a href="/about-us"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Disimpan</a>
                </li>
            @else
                {{-- Pengkondisian apabila belum login / guest maka munculkan yang ada di sini --}}
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0"
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="/cari-loker"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Cari
                        Pekerjaan</a>
                </li>
                <li>
                    <a href="/pasang-loker"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Pasang
                        Lowongan Pekerjaan</a>
                </li>
                <li>
                    <a href="/about-us"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Tentang
                        Kami</a>
                </li>
            @endauth

            {{-- Pengkondisian User Company --}}

            {{-- @auth
                @if (Auth::user()->role == 'auth.company')
                    <li>
                        <a href="/cari-loker"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Dashboard</a>
                    </li>
                    <li>
                        <a href="/pasang-loker"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Pasang
                            Lowongan</a>
                    </li>
                    <li>
                        <a href="/about-us"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Pelamar
                            Kerja</a>
                    </li>
                @endif

            @endauth --}}


            <hr class="bg-biru-tuwak">

            @guest
                <li>
                    <a href="/login"
                        class="block py-2 px-3 border-0 md:border border-biru-tuwak rounded-none lg:rounded-full  hover:bg-white/50 duration-300 ease-in-out text-biru-tuwak lg:py-2 lg:px-6">Masuk</a>
                </li>
                <li>
                    <a href="/pilih-akun"
                        class="block py-2 px-3 text-white bg-biru-tuwak rounded-none lg:rounded-full lg:hover:bg-biru-tuwak lg:hover:text-white hover:bg-white/50 duration-300 ease-in-out hover:text-black/70 lg:py-2 lg:px-6">Daftar</a>
                </li>
            @endguest

            @auth
                {{-- Pengkondisian apabila sudah login munculkan yang ada di sini --}}
                <li>
                    <a href="/profile-user"
                        class="flex items-center px-3 md:px-6 py-2 text-sm font-semibold text-gray-700">
                        <div class="bg-red-600 rounded-full relative -left-2 w-6 h-6 hidden md:block"></div>
                        Profil
                    </a>
                </li>
                <li class="flex">
                    <a href="#" class="flex items-center px-3 md:px-6 py-2 text-sm font-semibold text-gray-700">
                        <svg class="w-6 h-6 relative -left-2 text-gray-800 dark:text-white hidden md:block"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z" />
                        </svg>
                        Disimpan
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-3 md:px-6 py-2 text-sm font-semibold text-red-800">
                        <svg class="w-6 h-6 relative -left-2 text-red-800 dark:text-red-800 hidden md:block"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                        </svg>
                        Keluar
                    </a>
                </li>
            @endauth
        </ul>
    </div>
</nav>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        var menu = document.getElementById('mobile-menu');
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
        } else {
            menu.classList.add('hidden');
        }
    });
</script>






{{-- after login --}}
{{-- <nav class="bg-LightBlue w-full top-0 start-0 h-[70px] relative z-50 ">
  <div class=" flex flex-wrap items-center justify-between mx-11 p-4">
      <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="{{ Vite::asset('resources/assets/logo/logo2.png') }}" class="h-8" alt="Logo">
          <span class="self-center text-2xl font-semibold whitespace-nowrap">WorkSeeker</span>
      </a>
      <div class="flex md:order-2 space-x-3 mx-3 md:space-x-0 rtl:space-x-reverse">
         
          <a href="/login"
                  class="block py-2 px-3 mr-3 lg:border border-biru-tuwak rounded-none lg:rounded-full  hover:bg-white/50 duration-300 ease-in-out text-biru-tuwak lg:py-2 lg:px-6">Masuk</a>
              <a href="/pilih-akun"
                  class="block py-2 px-3 text-white bg-biru-tuwak rounded-none lg:rounded-full lg:hover:bg-biru-tuwak lg:hover:text-white hover:bg-white/50 duration-300 ease-in-out hover:text-black/70 lg:py-2 lg:px-6">Daftar</a> 
      </div>
      <button data-collapse-toggle="navbar-sticky" type="button"
          class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M1 1h15M1 7h15M1 13h15" />
          </svg>
      </button>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul
              class="flex flex-col p-4 md:p-0 bg-LightBlue mt-4 font-medium md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
              <li>
                  <a href="#"
                      class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0"
                      aria-current="page">Beranda</a>
              </li>
              <li>
                  <a href="/cari-loker"
                      class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Cari
                      Pekerjaan</a>
              </li>
              <li>
                  <a href="/pasang-loker"
                      class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Pasang
                      Lowongan Kerja</a>
              </li>
              <li>
                  <a href="/about-us"
                      class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Tentang
                      Kami</a>
              </li>
          </ul>
      </div>
  </div>
</nav> --}}
{{-- 
<script>
    document.querySelector('[data-collapse-toggle]').addEventListener('click', function() {
        const navbarMenu = document.getElementById('navbaruser');
        navbarMenu.classList.toggle('hidden');
    });
</script> --}}
