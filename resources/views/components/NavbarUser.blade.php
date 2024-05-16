
<nav class="bg-LightBlue w-full top-0 start-0 h-[70px]">
  <div class="max-w-screen flex flex-wrap items-center mx-10 smaller:mx-0 py-4 smaller:px-0 md:px-6">
  <a href="" class="flex items-center space-x-3 rtl:space-x-reverse smaller:mx-4">
      <img src="{{ Vite::asset('resources/assets/logo semudah doang.png')}}" class="h-8" alt="Logo">
      <span class="self-center text-2xl font-semibold whitespace-nowrap">WorkSeeker</span>
  </a>
  <div class="ms-auto lg:hidden">
    <button data-collapse-toggle="navbaruser" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 mx-4" aria-controls="navbaruser" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
      </svg>
    </button>
  </div>
  <div class="md:justify-items-start smaller:mx-0 sm:flex justify-between hidden w-full md:flex md:w-auto lg:me-auto smaller:right-0 smaller:mt-3" id="navbaruser">
    <ul class="flex flex-col md:p-0 my-auto md:mx-6 font-medium md:space-x-8 md:flex-row bg-LightBlue">
      <li>
        <a href="#" class="block py-2 px-3 text-black md:p-0 smaller:px-5 hover:bg-white/50 duration-300 ease-in-out">Beranda</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-black md:p-0 smaller:px-5 hover:bg-white/50 duration-300 ease-in-out">Cari Pekerjaan</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-black md:p-0 smaller:px-5 hover:bg-white/50 duration-300 ease-in-out">Pasang Lowongan Kerja</a>
      </li>
      <button type="button" class="text-white bg-BlueDark focus:outline-none px-6 font-medium md:rounded-lg text-sm py-2 text-center smaller:w-full smaller:rounded-none hover:bg-white/50 duration-300 ease-in-out hover:text-black/70">Login</button>
    </ul>
  </div>

  {{-- <div class="flex gap-2 justify-end">
  <button type="button" class="text-white bg-BlueDark focus:outline-none px-6 font-medium rounded-lg text-sm py-2 text-center">Login</button>
  </div> --}}
  </div>
</nav>
