
<nav class="bg-LightBlue w-full top-0 start-0 h-[70px]">
  <div class="max-w-screen flex flex-wrap items-center mx-10 p-4 px-6">
  <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="{{ Vite::asset('resources/assets/logo semudah doang.png')}}" class="h-8" alt="Logo">
      <span class="self-center text-2xl font-semibold whitespace-nowrap">WorkSeeker</span>
  </a>
  
  <div class="justify-items-start justify-evenly hidden w-full md:flex md:w-auto mx-7 me-auto ">
    <ul class="flex flex-col md:p-0 my-auto font-medium md:space-x-8 md:flex-row">
      <li>
        <a href="#" class="block py-2 px-3 text-black md:p-0">Beranda</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-black md:p-0">Cari Pekerjaan</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-black md:p-0">Pasang Lowongan Kerja</a>
      </li>
    </ul>
  </div>

  <div class="flex gap-2 justify-end">
  <button type="button" class="text-white bg-BlueDark focus:outline-none px-6 font-medium rounded-lg text-sm py-2 text-center">Login</button>
  </div>
  </div>
</nav>
