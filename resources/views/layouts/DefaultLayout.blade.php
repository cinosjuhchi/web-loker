<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    {{-- Misal Kasih Navbar --}}
    @include('components.NavbarUser')

    {{-- content --}}
    <div class="m-12">
        @yield('main')
    </div>
    {{-- content --}}
    {{-- Misal Kasih Footer --}}
</body>
</html>