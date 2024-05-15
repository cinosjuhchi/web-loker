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
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-JakartaSans">
    {{-- Misal Kasih Navbar --}}

    @include('components.NavbarUser')

    <div class="landingpage-user lg:mx-10 min-[300px]:mx-3 m-14">
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
</body>
</html>