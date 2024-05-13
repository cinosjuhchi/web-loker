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
    @include('components.NavbarUser')

    {{-- content --}}
    <div class="m-12">
        @yield('content')
    </div>
    {{-- content --}}
    {{-- Misal Kasih Footer --}}
</body>
</html>