@extends('layouts.DefaultLayout')
@section('main')
@php
    $pdfUrl = asset('storage/' . $resume->cv);
    $fullPdfUrl = env('APP_URL') . $pdfUrl;
@endphp

<div class="h-screen">
    <iframe type="application/pdf" src="{{ $pdfUrl }}" width="100%" height="100%">
</div>
@endsection