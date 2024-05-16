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

    {{-- content --}}
    <div class="">
        @yield('contentusercomp')
    </div>
    {{-- content --}}
    {{-- Misal Kasih Footer --}}
    {{-- @include('components.FooterUser') --}}

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const card1 = document.getElementById('selectcard1');
            const card2 = document.getElementById('selectcard2');
            const button = document.getElementById('registbtn');
            const registlink = document.getElementById('registlink');

            function handleCardSelect(route) {
                return function() {
                    // Toggle card selection
                    card1.classList.remove('border-blue-500', 'ring-2', 'ring-blue-500');
                    card2.classList.remove('border-blue-500', 'ring-2', 'ring-blue-500');
                    this.classList.add('border-blue-500', 'ring-2', 'ring-blue-500');

                    // Enable button
                    button.classList.remove('bg-DarkWhite', 'cursor-not-allowed');
                    button.classList.add('bg-blue-500', 'cursor-pointer', 'text-white');

                    // Set the href attribute of the link
                    registlink.href = route;
                }
            }

            card1.addEventListener('click', handleCardSelect('{{ route('register.company') }}'));
            card2.addEventListener('click', handleCardSelect('{{ route('register.user') }}'));
        });
    </script>
</body>
</html>
