@extends('layouts.DefaultLayout')
@section('main')
<div class="mx-[70px] mt-8">
    <h1 class="text-3xl font-bold">Lowongan Kerja Yang Disimpan</h1>
</div>


<div class="mt-4">
    @include('components/card.cardLowongan')
</div>

@endsection