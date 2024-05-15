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
    <link rel="shortcut icon" type="image/x-icon" href="{{ Vite::asset("resources/assets/logo/logo_outline.png") }}" />
</head>
<body class="font-JakartaSans">
    {{-- Misal Kasih Navbar --}}
    {{-- content --}}
    <div class="regis-company">
        @yield('registerCompany')
    </div>


    <div class="regis-user">
        @yield('registerUser')
    </div>

    <div class="login-user">
        @yield('loginUser')
    </div>
   

    <div class="landingpage-user mx-10 m-14">
        @yield('LandingPage')
    </div>


    <div class="landingpage-user">
        @yield('LandingPage2')
    </div>

    

     {{-- content --}}
<<<<<<< HEAD
     
=======
     {{-- @include('components.FooterUser') --}}
>>>>>>> ed0f7f2fb899a77e9df6125a7f8233cee10eb986
    {{-- Misal Kasih Footer --}}
</body>
</html>