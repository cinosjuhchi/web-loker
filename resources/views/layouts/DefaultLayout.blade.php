<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
<<<<<<< HEAD
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">    
=======
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
>>>>>>> cf5f21deca1953605a2fc56a61212bc275152761
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-JakartaSans">
    {{-- Misal Kasih Navbar --}}
    @include('components.NavbarUser')

    {{-- content --}}
    <div class="m-12">
        @yield('main')
    </div>
    {{-- content --}}
    {{-- Misal Kasih Footer --}}
    @include('components.FooterUser')
</body>
</html>