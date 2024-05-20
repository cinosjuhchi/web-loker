@extends('layouts.GuestLayout')
@section('cardProfilePerusahaan')
    <div class="lg:mx-[70px] mx-[15px] gap-5 grid smaller:grid-cols-1 lg:grid-cols-4 mt-12 mb-12">
        @foreach ($companies as $company)
            <a href="{{ url('/detail-perusahaan/' . $company->id . '/posts') }}">
                <div class="lg:w-full p-4 bg-white rounded-lg  border-2 border-LightGrey">
                    <div class="flex items-center">
                        <img src="{{ $company->photo_profile ? asset($company->photo_profile) : Vite::asset('resources/assets/placeholder.png') }}"
                            alt="Company Logo" class="h-20 w-20 rounded-full mr-3 object-cover object-center">
                        <div>
                            <p class="text-xl font-semibold">{{ $company->company_name }}</p>
                        </div>
                    </div>
                    <hr class="my-3 border border-LightGrey">
                    <div class="mt-3">
                        <h1 class="text-lg font-medium"> Bidang Perusahaan :</h1>
                        <h1 class="text-base text-DarkGrey">{{ $company->category->name }}</h1>
                    </div>
                    <div class="mt-3">
                        <h1 class="text-lg font-medium"> Provinsi Perusahaan :</h1>
                        <h1 class="text-base text-DarkGrey">{{ $company->province }}</h1>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection



{{-- <a href="/detail-perusahaan">
    <div class="lg:w-72 p-4 bg-white border-2 rounded-lg">
        <div class="flex items-center">
            <img src="{{ Vite::asset('resources/assets/contoh.png') }}" alt="Alfamart Logo" class=" mr-3">
            <div>
                <p>PT. Alfamart</p>
            </div>
        </div>
    </div>
</a>

<a href="/detail-perusahaan">
    <div class="lg:w-72 p-4 bg-white border-2 rounded-lg">
        <div class="flex items-center">
            <img src="{{ Vite::asset('resources/assets/contoh.png') }}" alt="Alfamart Logo" class=" mr-3">
            <div>
                <p>PT. Alfamart</p>
            </div>
        </div>
    </div>
</a>

<a href="/detail-perusahaan">
    <div class="lg:w-72 p-4 bg-white border-2 rounded-lg">
        <div class="flex items-center">
            <img src="{{ Vite::asset('resources/assets/contoh.png') }}" alt="Alfamart Logo" class=" mr-3">
            <div>
                <p>PT. Alfamart</p>
            </div>
        </div>
    </div>
</a>

<a href="/detail-perusahaan">
    <div class="lg:w-72 p-4 bg-white border-2 rounded-lg">
        <div class="flex items-center">
            <img src="{{ Vite::asset('resources/assets/contoh.png') }}" alt="Alfamart Logo" class=" mr-3">
            <div>
                <p>PT. Alfamart</p>
            </div>
        </div>
    </div>
</a>

<a href="/detail-perusahaan">
    <div class="lg:w-72 p-4 bg-white border-2 rounded-lg">
        <div class="flex items-center">
            <img src="{{ Vite::asset('resources/assets/contoh.png') }}" alt="Alfamart Logo" class=" mr-3">
            <div>
                <p>PT. Alfamart</p>
            </div>
        </div>
    </div>
</a> --}}
