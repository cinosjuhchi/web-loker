
<nav class="bg-LightBlue w-full top-0 start-0 h-[70px] relative z-50 ">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto  px-4 py-4 md:px-6">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="{{ Vite::asset('resources/assets/logo/logo2.png') }}" class="h-8" alt="Logo">
      <span class="self-center text-2xl font-semibold whitespace-nowrap">WorkSeeker</span>
    </a>
    <div class="lg:hidden">
      <button data-collapse-toggle="navbaruser" type="button" class=" inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbaruser" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
      </button>
    </div>
    <div class="hidden w-full lg:flex lg:items-center lg:w-auto" id="navbaruser">
      <ul class="flex lg:items-center absolute lg:relative w-[91%] mt-3  lg:w-full flex-col lg:flex-row lg:space-x-8 lg:mt-0 lg:text-sm lg:font-medium bg-LightBlue lg:bg-transparent">
        <li>
          <a href="#" class="block py-2 px-3 text-black lg:p-0 hover:bg-white/50 duration-300 ease-in-out">Beranda</a>
        </li>
        <li>
          <a href="/cari-loker" class="block py-2 px-3 text-black lg:p-0 hover:bg-white/50 duration-300 ease-in-out">Cari Pekerjaan</a>
        </li>
        <li>
          <a href="/pasang-loker" class="block py-2 px-3 text-black lg:p-0 hover:bg-white/50 duration-300 ease-in-out">Pasang Lowongan Kerja</a>
        </li>
        <li>
          <a href="/login" class="block py-2 px-3 text-white bg-BlueDark rounded-none lg:rounded-lg  hover:bg-white/50 duration-300 ease-in-out hover:text-black/70 lg:py-2 lg:px-6">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  document.querySelector('[data-collapse-toggle]').addEventListener('click', function() {
    const navbarMenu = document.getElementById('navbaruser');
    navbarMenu.classList.toggle('hidden');
  });
</script>