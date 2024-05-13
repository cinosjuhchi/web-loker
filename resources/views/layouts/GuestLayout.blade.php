<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>
<body>
    {{-- Misal Kasih Navbar --}}

    {{-- content --}}
    <div class="regis-user">
        @yield('registerUser')
    </div>

    <div class="login-user">
        @yield('loginUser')
    </div>
    {{-- content --}}
    @include('components.FooterUser')
    {{-- Misal Kasih Footer --}}
</body>
</html>