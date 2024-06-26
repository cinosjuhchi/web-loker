<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
        @vite(['resources/css/app.css','resources/js/app.js'])
        <link rel="shortcut icon" type="image/x-icon" href="{{ Vite::asset("resources/assets/logo/favicon.ico") }}" />
    </head>
<body class="font-JakartaSans">
    {{-- Misal Kasih Navbar --}}

    @include('components.NavbarUser')

    <div class="landingpage-user ">
        @yield('LandingPage')
    </div>

    <div class="landingpage-user">
        @yield('LandingPage2')
    </div>

    <div class="tampilan-cariLowongan" >
   @yield('Carilowongan')
    </div>

    
     {{-- content --}}
     @include('components.FooterUser')
    {{-- Misal Kasih Footer --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>