@extends('layouts.GuestLayout')
@section('error500')
<div>
    <section class="bg-gray-900 dark:bg-gray-900 h-screen grid place-items-center">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-blue-500">500</h1>
                <p class="mb-4 text-3xl tracking-tight font-bold md:text-4xl text-white">Internal Server Error.</p>
                <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">We are already working to solve the problem. </p>
                <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">Error Code : {{ $message }} </p>
            </div>   
        </div>
    </section>
</div>
@endsection