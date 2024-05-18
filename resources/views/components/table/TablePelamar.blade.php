@extends('layouts.GuestLayout')
@section('tablePelamar')

<div class="lg:mx-[70px] mt-10 mx-[15px]">
    
    <div class="overflow-scroll lg:overflow-auto">
      <table class="min-w-full bg-white border rounded ">
        <thead>
          <tr class="bg-blue-200 text-left">
            <th class="py-2 px-4 border">No</th>
            <th class="py-2 px-4 border">Nama</th>
            <th class="py-2 px-4 border">Email</th>
            <th class="py-2 px-4 border">Nomor Telepon</th>
            <th class="py-2 px-4 border">Pekerjaan</th>
            <th class="py-2 px-4 border">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <!-- Repeat this block for each row -->
          <tr class="border-t">
            <td class="py-2 px-4 border">1</td>
            <td class="py-2 px-4 border">
              <div class="flex items-center">
                <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full mr-2">
                Nama
              </div>
            </td>
            <td class="py-2 px-4 border">username@gmail.com</td>
            <td class="py-2 px-4 border">0812-9829-8245</td>
            <td class="py-2 px-4 border">Tukang Parkir</td>
            <td class="py-2 px-4 border">
               
            <a href="/detail-profile-user">
                <button class="bg-biru-tuwak text-white px-2 py-1 rounded">
                    <svg class="w-6 h-6  text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778"/>
                      </svg>
                      
                  </button>
            </a>
             
            </td>
          </tr>
          <!-- Repeat end -->
          <!-- Copy the above block for each additional row -->
        </tbody>
      </table>
    </div>
  </div>

@endsection