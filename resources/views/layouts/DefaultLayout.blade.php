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
        <link rel="stylesheet" href="sweetalert2.min.css">
        <link rel="shortcut icon" type="image/x-icon" href="{{ Vite::asset("resources/assets/logo/favicon.ico") }}" />
    </head>
<body class="font-JakartaSans">
    {{-- Misal Kasih Navbar --}}
    @include('components.NavbarUser')

    {{-- content --}}
    
        <div class="">
            @yield('main')
        </div>
        <div class="">
            @yield('dashboardCompany')
        </div>

    <div class="profile-user">
        @yield('profileUser')
    </div>
    <div class="profile-perusahaan">
        @yield('profileCompany')
    </div>
    <div class="detail-perusahaan-user">
        @yield('detailPerusahaanUserPage')
    </div>
    <div class="upload-lamaran">
        @yield('uploadLamaran')
    </div>
    <div class="detail-profilUser" >
        @yield('detailProfileUser')
         </div>

 
    
    {{-- content --}}
    {{-- Misal Kasih Footer --}}
    @include('components.FooterUser')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>